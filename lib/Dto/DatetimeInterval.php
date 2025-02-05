<?php
/**
 * DatetimeInterval
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cargomart API v2
 *
 * REST-Full API для логистической биржи cargomart.ru
 *
 * The version of the OpenAPI document: 2.0
 * Contact: support@cargomart.ru
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MagDv\Cargomart\Dto;

use \ArrayAccess;
use \MagDv\Cargomart\ObjectSerializer;

/**
 * DatetimeInterval Class Doc Comment
 *
 * @category Class
 * @description Интервал времени
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatetimeInterval implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatetimeInterval';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'days' => 'int',
        'hours' => 'int',
        'minutes' => 'int',
        'seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'days' => null,
        'hours' => null,
        'minutes' => null,
        'seconds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'days' => false,
        'hours' => false,
        'minutes' => false,
        'seconds' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'days' => 'days',
        'hours' => 'hours',
        'minutes' => 'minutes',
        'seconds' => 'seconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'days' => 'setDays',
        'hours' => 'setHours',
        'minutes' => 'setMinutes',
        'seconds' => 'setSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'days' => 'getDays',
        'hours' => 'getHours',
        'minutes' => 'getMinutes',
        'seconds' => 'getSeconds'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('days', $data ?? [], null);
        $this->setIfExists('hours', $data ?? [], null);
        $this->setIfExists('minutes', $data ?? [], null);
        $this->setIfExists('seconds', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['days'] === null) {
            $invalidProperties[] = "'days' can't be null";
        }
        if (($this->container['days'] < 0)) {
            $invalidProperties[] = "invalid value for 'days', must be bigger than or equal to 0.";
        }

        if ($this->container['hours'] === null) {
            $invalidProperties[] = "'hours' can't be null";
        }
        if (($this->container['hours'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours', must be bigger than or equal to 0.";
        }

        if ($this->container['minutes'] === null) {
            $invalidProperties[] = "'minutes' can't be null";
        }
        if (($this->container['minutes'] < 0)) {
            $invalidProperties[] = "invalid value for 'minutes', must be bigger than or equal to 0.";
        }

        if ($this->container['seconds'] === null) {
            $invalidProperties[] = "'seconds' can't be null";
        }
        if (($this->container['seconds'] < 0)) {
            $invalidProperties[] = "invalid value for 'seconds', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets days
     *
     * @return int
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int $days Количество дней
     *
     * @return self
     */
    public function setDays($days)
    {
        if (is_null($days)) {
            throw new \InvalidArgumentException('non-nullable days cannot be null');
        }

        if (($days < 0)) {
            throw new \InvalidArgumentException('invalid value for $days when calling DatetimeInterval., must be bigger than or equal to 0.');
        }

        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return int
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param int $hours Количество часов
     *
     * @return self
     */
    public function setHours($hours)
    {
        if (is_null($hours)) {
            throw new \InvalidArgumentException('non-nullable hours cannot be null');
        }

        if (($hours < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours when calling DatetimeInterval., must be bigger than or equal to 0.');
        }

        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->container['minutes'];
    }

    /**
     * Sets minutes
     *
     * @param int $minutes Количество минут
     *
     * @return self
     */
    public function setMinutes($minutes)
    {
        if (is_null($minutes)) {
            throw new \InvalidArgumentException('non-nullable minutes cannot be null');
        }

        if (($minutes < 0)) {
            throw new \InvalidArgumentException('invalid value for $minutes when calling DatetimeInterval., must be bigger than or equal to 0.');
        }

        $this->container['minutes'] = $minutes;

        return $this;
    }

    /**
     * Gets seconds
     *
     * @return int
     */
    public function getSeconds()
    {
        return $this->container['seconds'];
    }

    /**
     * Sets seconds
     *
     * @param int $seconds Количество секунд
     *
     * @return self
     */
    public function setSeconds($seconds)
    {
        if (is_null($seconds)) {
            throw new \InvalidArgumentException('non-nullable seconds cannot be null');
        }

        if (($seconds < 0)) {
            throw new \InvalidArgumentException('invalid value for $seconds when calling DatetimeInterval., must be bigger than or equal to 0.');
        }

        $this->container['seconds'] = $seconds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


