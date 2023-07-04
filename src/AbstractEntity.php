<?php

namespace Cargomart\ApiClient;

abstract class AbstractEntity implements \JsonSerializable
{
    protected static $types = [];
    protected static $nullables = [];

    protected $values = [];
    protected $loadedValues = [];

    public function __get($attr)
    {
        if (! isset(static::$types[$attr])) {
            throw new \RuntimeException('Неизвестный аттрибут ' . static::class . '::$' . $attr);
        }
        return $this->values[$attr] ?? null;
    }

    public function __set($attr, $value)
    {
        if (! isset(static::$types[$attr])) {
            throw new \RuntimeException('Неизвестный аттрибут ' . $attr);
        }
        if (! self::validateType($attr, $value)) {
            throw new \RuntimeException('Передан неверный тип аттрибута ' . $attr);
        }

        $this->values[$attr] = $value;
        $this->loadedValues[$attr] = true;
    }

    public function __isset($attr)
    {
        return $this->loadedValues[$attr] ?? false;
    }

    public function __unset($attr)
    {
        unset($this->loadedValues[$attr], $this->values[$attr]);
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->values;
    }

    public static function deserialize(array $values): self
    {
        $entity = new static();

        foreach ($values as $attr => $value) {
            if (! isset(static::$types[$attr])) {
                continue;
            }
            $typedValue = self::toType($value, static::$types[$attr]);
            $entity->values[$attr] = $typedValue;
            $entity->loadedValues[$attr] = true;
        }

        return $entity;
    }

    private static function toType($value, array $typing)
    {
        if ($typing[0] === 'array') {
            $items = [];
            foreach ($value as $v) {
                $items[] = self::toType($v, array($typing[1]));
            }
            return $items;
        }

        switch ($typing[0]) {
            case 'boolean':
            case 'bool':
                return (bool)$value;

            case 'integer':
            case 'int':
                return (int)$value;

            case 'double':
            case 'float':
                return (float)$value;

            case 'string':
                return (string)$value;

            case \stdClass::class:
            case '\stdClass':
            case 'stdClass':
            case 'object':
                return (object)$value;
        }

        return $typing[0]::deserialize($value);
    }

    private static function validateType($attr, $value): bool
    {
        if (null === $value) {
            return static::$nullables[$attr] ?? false;
        }

        $typing = static::$types[$attr];
        switch ($typing[0]) {
            case 'boolean':
            case 'bool':
                return is_bool($value);

            case 'integer':
            case 'int':
                return is_int($value);

            case 'double':
            case 'float':
                return is_float($value);

            case 'string':
                return is_string($value);

            case 'array':
                return is_array($value);

            case \stdClass::class:
            case '\stdClass':
            case 'stdClass':
            case 'object':
                return is_object($value);
        }

        return is_a($value, $typing[0]);
    }
}
