<?php
/**
 * OrderShort
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
 * OrderShort Class Doc Comment
 *
 * @category Class
 * @description Объект заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderShort implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order-short';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'serial_id' => 'int',
        'currency_code' => 'string',
        'vat_rate' => 'float',
        'is_consignor_vat' => 'bool',
        'is_carrier_vat' => 'bool',
        'distance' => 'int',
        'status_id' => '\MagDv\Cargomart\Dto\OrderStatusEnum',
        'ext_status_id' => '\MagDv\Cargomart\Dto\OrderStatusEnum',
        'expeditor_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'serial_id' => null,
        'currency_code' => null,
        'vat_rate' => null,
        'is_consignor_vat' => null,
        'is_carrier_vat' => null,
        'distance' => null,
        'status_id' => null,
        'ext_status_id' => null,
        'expeditor_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'serial_id' => false,
        'currency_code' => false,
        'vat_rate' => false,
        'is_consignor_vat' => false,
        'is_carrier_vat' => false,
        'distance' => false,
        'status_id' => false,
        'ext_status_id' => false,
        'expeditor_id' => false
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
        'id' => 'id',
        'serial_id' => 'serialId',
        'currency_code' => 'currencyCode',
        'vat_rate' => 'vatRate',
        'is_consignor_vat' => 'isConsignorVat',
        'is_carrier_vat' => 'isCarrierVat',
        'distance' => 'distance',
        'status_id' => 'statusId',
        'ext_status_id' => 'extStatusId',
        'expeditor_id' => 'expeditorId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'serial_id' => 'setSerialId',
        'currency_code' => 'setCurrencyCode',
        'vat_rate' => 'setVatRate',
        'is_consignor_vat' => 'setIsConsignorVat',
        'is_carrier_vat' => 'setIsCarrierVat',
        'distance' => 'setDistance',
        'status_id' => 'setStatusId',
        'ext_status_id' => 'setExtStatusId',
        'expeditor_id' => 'setExpeditorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'serial_id' => 'getSerialId',
        'currency_code' => 'getCurrencyCode',
        'vat_rate' => 'getVatRate',
        'is_consignor_vat' => 'getIsConsignorVat',
        'is_carrier_vat' => 'getIsCarrierVat',
        'distance' => 'getDistance',
        'status_id' => 'getStatusId',
        'ext_status_id' => 'getExtStatusId',
        'expeditor_id' => 'getExpeditorId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('serial_id', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('vat_rate', $data ?? [], null);
        $this->setIfExists('is_consignor_vat', $data ?? [], false);
        $this->setIfExists('is_carrier_vat', $data ?? [], false);
        $this->setIfExists('distance', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('ext_status_id', $data ?? [], null);
        $this->setIfExists('expeditor_id', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['status_id'] === null) {
            $invalidProperties[] = "'status_id' can't be null";
        }
        if ($this->container['ext_status_id'] === null) {
            $invalidProperties[] = "'ext_status_id' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Идентификатор заказа
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets serial_id
     *
     * @return int|null
     */
    public function getSerialId()
    {
        return $this->container['serial_id'];
    }

    /**
     * Sets serial_id
     *
     * @param int|null $serial_id Порядковый номер заказа
     *
     * @return self
     */
    public function setSerialId($serial_id)
    {
        if (is_null($serial_id)) {
            throw new \InvalidArgumentException('non-nullable serial_id cannot be null');
        }
        $this->container['serial_id'] = $serial_id;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Код валюты заказа
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float|null
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float|null $vat_rate Ставка ндс
     *
     * @return self
     */
    public function setVatRate($vat_rate)
    {
        if (is_null($vat_rate)) {
            throw new \InvalidArgumentException('non-nullable vat_rate cannot be null');
        }
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets is_consignor_vat
     *
     * @return bool|null
     */
    public function getIsConsignorVat()
    {
        return $this->container['is_consignor_vat'];
    }

    /**
     * Sets is_consignor_vat
     *
     * @param bool|null $is_consignor_vat Отправитель работает с НДС
     *
     * @return self
     */
    public function setIsConsignorVat($is_consignor_vat)
    {
        if (is_null($is_consignor_vat)) {
            throw new \InvalidArgumentException('non-nullable is_consignor_vat cannot be null');
        }
        $this->container['is_consignor_vat'] = $is_consignor_vat;

        return $this;
    }

    /**
     * Gets is_carrier_vat
     *
     * @return bool|null
     */
    public function getIsCarrierVat()
    {
        return $this->container['is_carrier_vat'];
    }

    /**
     * Sets is_carrier_vat
     *
     * @param bool|null $is_carrier_vat Перевозчик работает с НДС
     *
     * @return self
     */
    public function setIsCarrierVat($is_carrier_vat)
    {
        if (is_null($is_carrier_vat)) {
            throw new \InvalidArgumentException('non-nullable is_carrier_vat cannot be null');
        }
        $this->container['is_carrier_vat'] = $is_carrier_vat;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return int|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param int|null $distance Общее расстояние по заказу (м)
     *
     * @return self
     */
    public function setDistance($distance)
    {
        if (is_null($distance)) {
            throw new \InvalidArgumentException('non-nullable distance cannot be null');
        }
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return \MagDv\Cargomart\Dto\OrderStatusEnum
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param \MagDv\Cargomart\Dto\OrderStatusEnum $status_id Статуса заказа
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets ext_status_id
     *
     * @return \MagDv\Cargomart\Dto\OrderStatusEnum
     */
    public function getExtStatusId()
    {
        return $this->container['ext_status_id'];
    }

    /**
     * Sets ext_status_id
     *
     * @param \MagDv\Cargomart\Dto\OrderStatusEnum $ext_status_id Расширенный статус заказа
     *
     * @return self
     */
    public function setExtStatusId($ext_status_id)
    {
        if (is_null($ext_status_id)) {
            throw new \InvalidArgumentException('non-nullable ext_status_id cannot be null');
        }
        $this->container['ext_status_id'] = $ext_status_id;

        return $this;
    }

    /**
     * Gets expeditor_id
     *
     * @return string|null
     */
    public function getExpeditorId()
    {
        return $this->container['expeditor_id'];
    }

    /**
     * Sets expeditor_id
     *
     * @param string|null $expeditor_id Хэш экспедитора
     *
     * @return self
     */
    public function setExpeditorId($expeditor_id)
    {
        if (is_null($expeditor_id)) {
            throw new \InvalidArgumentException('non-nullable expeditor_id cannot be null');
        }
        $this->container['expeditor_id'] = $expeditor_id;

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


