<?php
/**
 * OrderProxyInfoRequest
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
 * OrderProxyInfoRequest Class Doc Comment
 *
 * @category Class
 * @description Добавочные данные для заполнения доверенности на самовывоз с/без факсимиле
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderProxyInfoRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderProxyInfoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wealth_by' => 'string',
        'items' => '\MagDv\Cargomart\Dto\WealthItem[]',
        'point_id_from' => 'int',
        'point_id_to' => 'int',
        'is_with_facsimile' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'wealth_by' => null,
        'items' => null,
        'point_id_from' => null,
        'point_id_to' => null,
        'is_with_facsimile' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'wealth_by' => false,
        'items' => false,
        'point_id_from' => false,
        'point_id_to' => false,
        'is_with_facsimile' => false
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
        'wealth_by' => 'wealthBy',
        'items' => 'items',
        'point_id_from' => 'pointIdFrom',
        'point_id_to' => 'pointIdTo',
        'is_with_facsimile' => 'isWithFacsimile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wealth_by' => 'setWealthBy',
        'items' => 'setItems',
        'point_id_from' => 'setPointIdFrom',
        'point_id_to' => 'setPointIdTo',
        'is_with_facsimile' => 'setIsWithFacsimile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wealth_by' => 'getWealthBy',
        'items' => 'getItems',
        'point_id_from' => 'getPointIdFrom',
        'point_id_to' => 'getPointIdTo',
        'is_with_facsimile' => 'getIsWithFacsimile'
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
        $this->setIfExists('wealth_by', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('point_id_from', $data ?? [], null);
        $this->setIfExists('point_id_to', $data ?? [], null);
        $this->setIfExists('is_with_facsimile', $data ?? [], false);
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

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets wealth_by
     *
     * @return string|null
     */
    public function getWealthBy()
    {
        return $this->container['wealth_by'];
    }

    /**
     * Sets wealth_by
     *
     * @param string|null $wealth_by Материальных ценностей по
     *
     * @return self
     */
    public function setWealthBy($wealth_by)
    {
        if (is_null($wealth_by)) {
            throw new \InvalidArgumentException('non-nullable wealth_by cannot be null');
        }
        $this->container['wealth_by'] = $wealth_by;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \MagDv\Cargomart\Dto\WealthItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \MagDv\Cargomart\Dto\WealthItem[] $items Список материальных ценностей для таблицы
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets point_id_from
     *
     * @return int|null
     */
    public function getPointIdFrom()
    {
        return $this->container['point_id_from'];
    }

    /**
     * Sets point_id_from
     *
     * @param int|null $point_id_from ID пункта погрузки
     *
     * @return self
     */
    public function setPointIdFrom($point_id_from)
    {
        if (is_null($point_id_from)) {
            throw new \InvalidArgumentException('non-nullable point_id_from cannot be null');
        }
        $this->container['point_id_from'] = $point_id_from;

        return $this;
    }

    /**
     * Gets point_id_to
     *
     * @return int|null
     */
    public function getPointIdTo()
    {
        return $this->container['point_id_to'];
    }

    /**
     * Sets point_id_to
     *
     * @param int|null $point_id_to ID пункта выгрузки
     *
     * @return self
     */
    public function setPointIdTo($point_id_to)
    {
        if (is_null($point_id_to)) {
            throw new \InvalidArgumentException('non-nullable point_id_to cannot be null');
        }
        $this->container['point_id_to'] = $point_id_to;

        return $this;
    }

    /**
     * Gets is_with_facsimile
     *
     * @return bool|null
     */
    public function getIsWithFacsimile()
    {
        return $this->container['is_with_facsimile'];
    }

    /**
     * Sets is_with_facsimile
     *
     * @param bool|null $is_with_facsimile С факсимиле
     *
     * @return self
     */
    public function setIsWithFacsimile($is_with_facsimile)
    {
        if (is_null($is_with_facsimile)) {
            throw new \InvalidArgumentException('non-nullable is_with_facsimile cannot be null');
        }
        $this->container['is_with_facsimile'] = $is_with_facsimile;

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


