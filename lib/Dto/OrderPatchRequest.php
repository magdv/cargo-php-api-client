<?php
/**
 * OrderPatchRequest
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
 * OrderPatchRequest Class Doc Comment
 *
 * @category Class
 * @description Данные для создания запроса на изменение заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderPatchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderPatchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consignor_price' => 'string',
        'carrier_price' => 'string',
        'currency_code' => 'string',
        'company_branch_id' => 'int',
        'cargo_type' => 'string',
        'cargo_weight' => 'float',
        'cargo_capacity' => 'int',
        'load_weight' => 'float',
        'load_capacity' => 'int',
        'temperature' => '\MagDv\Cargomart\Dto\TemperatureRange',
        'device' => 'string[]',
        'conditions' => 'string[]',
        'comment' => 'string',
        'points' => '\MagDv\Cargomart\Dto\OrderDraftRoutePoint[]',
        'external_id' => 'string',
        'tag' => 'string[]',
        'comment_for_consignor' => 'string',
        'comment_for_carrier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consignor_price' => null,
        'carrier_price' => null,
        'currency_code' => null,
        'company_branch_id' => null,
        'cargo_type' => null,
        'cargo_weight' => null,
        'cargo_capacity' => null,
        'load_weight' => null,
        'load_capacity' => null,
        'temperature' => null,
        'device' => null,
        'conditions' => null,
        'comment' => null,
        'points' => null,
        'external_id' => null,
        'tag' => null,
        'comment_for_consignor' => null,
        'comment_for_carrier' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'consignor_price' => false,
        'carrier_price' => false,
        'currency_code' => false,
        'company_branch_id' => false,
        'cargo_type' => false,
        'cargo_weight' => false,
        'cargo_capacity' => false,
        'load_weight' => false,
        'load_capacity' => false,
        'temperature' => true,
        'device' => false,
        'conditions' => false,
        'comment' => true,
        'points' => false,
        'external_id' => false,
        'tag' => false,
        'comment_for_consignor' => false,
        'comment_for_carrier' => true
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
        'consignor_price' => 'consignorPrice',
        'carrier_price' => 'carrierPrice',
        'currency_code' => 'currencyCode',
        'company_branch_id' => 'companyBranchId',
        'cargo_type' => 'cargoType',
        'cargo_weight' => 'cargoWeight',
        'cargo_capacity' => 'cargoCapacity',
        'load_weight' => 'loadWeight',
        'load_capacity' => 'loadCapacity',
        'temperature' => 'temperature',
        'device' => 'device',
        'conditions' => 'conditions',
        'comment' => 'comment',
        'points' => 'points',
        'external_id' => 'externalId',
        'tag' => 'tag',
        'comment_for_consignor' => 'commentForConsignor',
        'comment_for_carrier' => 'commentForCarrier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignor_price' => 'setConsignorPrice',
        'carrier_price' => 'setCarrierPrice',
        'currency_code' => 'setCurrencyCode',
        'company_branch_id' => 'setCompanyBranchId',
        'cargo_type' => 'setCargoType',
        'cargo_weight' => 'setCargoWeight',
        'cargo_capacity' => 'setCargoCapacity',
        'load_weight' => 'setLoadWeight',
        'load_capacity' => 'setLoadCapacity',
        'temperature' => 'setTemperature',
        'device' => 'setDevice',
        'conditions' => 'setConditions',
        'comment' => 'setComment',
        'points' => 'setPoints',
        'external_id' => 'setExternalId',
        'tag' => 'setTag',
        'comment_for_consignor' => 'setCommentForConsignor',
        'comment_for_carrier' => 'setCommentForCarrier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignor_price' => 'getConsignorPrice',
        'carrier_price' => 'getCarrierPrice',
        'currency_code' => 'getCurrencyCode',
        'company_branch_id' => 'getCompanyBranchId',
        'cargo_type' => 'getCargoType',
        'cargo_weight' => 'getCargoWeight',
        'cargo_capacity' => 'getCargoCapacity',
        'load_weight' => 'getLoadWeight',
        'load_capacity' => 'getLoadCapacity',
        'temperature' => 'getTemperature',
        'device' => 'getDevice',
        'conditions' => 'getConditions',
        'comment' => 'getComment',
        'points' => 'getPoints',
        'external_id' => 'getExternalId',
        'tag' => 'getTag',
        'comment_for_consignor' => 'getCommentForConsignor',
        'comment_for_carrier' => 'getCommentForCarrier'
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
        $this->setIfExists('consignor_price', $data ?? [], null);
        $this->setIfExists('carrier_price', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('company_branch_id', $data ?? [], null);
        $this->setIfExists('cargo_type', $data ?? [], null);
        $this->setIfExists('cargo_weight', $data ?? [], null);
        $this->setIfExists('cargo_capacity', $data ?? [], null);
        $this->setIfExists('load_weight', $data ?? [], null);
        $this->setIfExists('load_capacity', $data ?? [], null);
        $this->setIfExists('temperature', $data ?? [], null);
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('points', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('comment_for_consignor', $data ?? [], null);
        $this->setIfExists('comment_for_carrier', $data ?? [], null);
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

        if ($this->container['consignor_price'] === null) {
            $invalidProperties[] = "'consignor_price' can't be null";
        }
        if ($this->container['carrier_price'] === null) {
            $invalidProperties[] = "'carrier_price' can't be null";
        }
        if ($this->container['cargo_type'] === null) {
            $invalidProperties[] = "'cargo_type' can't be null";
        }
        if ($this->container['cargo_weight'] === null) {
            $invalidProperties[] = "'cargo_weight' can't be null";
        }
        if ($this->container['cargo_capacity'] === null) {
            $invalidProperties[] = "'cargo_capacity' can't be null";
        }
        if ($this->container['points'] === null) {
            $invalidProperties[] = "'points' can't be null";
        }
        if ($this->container['comment_for_consignor'] === null) {
            $invalidProperties[] = "'comment_for_consignor' can't be null";
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
     * Gets consignor_price
     *
     * @return string
     */
    public function getConsignorPrice()
    {
        return $this->container['consignor_price'];
    }

    /**
     * Sets consignor_price
     *
     * @param string $consignor_price Цена для отправителя
     *
     * @return self
     */
    public function setConsignorPrice($consignor_price)
    {
        if (is_null($consignor_price)) {
            throw new \InvalidArgumentException('non-nullable consignor_price cannot be null');
        }
        $this->container['consignor_price'] = $consignor_price;

        return $this;
    }

    /**
     * Gets carrier_price
     *
     * @return string
     */
    public function getCarrierPrice()
    {
        return $this->container['carrier_price'];
    }

    /**
     * Sets carrier_price
     *
     * @param string $carrier_price Цена для перевозчика
     *
     * @return self
     */
    public function setCarrierPrice($carrier_price)
    {
        if (is_null($carrier_price)) {
            throw new \InvalidArgumentException('non-nullable carrier_price cannot be null');
        }
        $this->container['carrier_price'] = $carrier_price;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Код валюты заказа
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
     * Gets company_branch_id
     *
     * @return int|null
     */
    public function getCompanyBranchId()
    {
        return $this->container['company_branch_id'];
    }

    /**
     * Sets company_branch_id
     *
     * @param int|null $company_branch_id Идентификатор дочерней компании
     *
     * @return self
     */
    public function setCompanyBranchId($company_branch_id)
    {
        if (is_null($company_branch_id)) {
            throw new \InvalidArgumentException('non-nullable company_branch_id cannot be null');
        }
        $this->container['company_branch_id'] = $company_branch_id;

        return $this;
    }

    /**
     * Gets cargo_type
     *
     * @return string
     */
    public function getCargoType()
    {
        return $this->container['cargo_type'];
    }

    /**
     * Sets cargo_type
     *
     * @param string $cargo_type Описание груза
     *
     * @return self
     */
    public function setCargoType($cargo_type)
    {
        if (is_null($cargo_type)) {
            throw new \InvalidArgumentException('non-nullable cargo_type cannot be null');
        }
        $this->container['cargo_type'] = $cargo_type;

        return $this;
    }

    /**
     * Gets cargo_weight
     *
     * @return float
     */
    public function getCargoWeight()
    {
        return $this->container['cargo_weight'];
    }

    /**
     * Sets cargo_weight
     *
     * @param float $cargo_weight Тоннаж авто из условий заказа(в тоннах)
     *
     * @return self
     */
    public function setCargoWeight($cargo_weight)
    {
        if (is_null($cargo_weight)) {
            throw new \InvalidArgumentException('non-nullable cargo_weight cannot be null');
        }
        $this->container['cargo_weight'] = $cargo_weight;

        return $this;
    }

    /**
     * Gets cargo_capacity
     *
     * @return int
     */
    public function getCargoCapacity()
    {
        return $this->container['cargo_capacity'];
    }

    /**
     * Sets cargo_capacity
     *
     * @param int $cargo_capacity Кубатура авто из условий заказа(в м3)
     *
     * @return self
     */
    public function setCargoCapacity($cargo_capacity)
    {
        if (is_null($cargo_capacity)) {
            throw new \InvalidArgumentException('non-nullable cargo_capacity cannot be null');
        }
        $this->container['cargo_capacity'] = $cargo_capacity;

        return $this;
    }

    /**
     * Gets load_weight
     *
     * @return float|null
     */
    public function getLoadWeight()
    {
        return $this->container['load_weight'];
    }

    /**
     * Sets load_weight
     *
     * @param float|null $load_weight Вес груза(в тоннах)
     *
     * @return self
     */
    public function setLoadWeight($load_weight)
    {
        if (is_null($load_weight)) {
            throw new \InvalidArgumentException('non-nullable load_weight cannot be null');
        }
        $this->container['load_weight'] = $load_weight;

        return $this;
    }

    /**
     * Gets load_capacity
     *
     * @return int|null
     */
    public function getLoadCapacity()
    {
        return $this->container['load_capacity'];
    }

    /**
     * Sets load_capacity
     *
     * @param int|null $load_capacity Объём груза(в м3)
     *
     * @return self
     */
    public function setLoadCapacity($load_capacity)
    {
        if (is_null($load_capacity)) {
            throw new \InvalidArgumentException('non-nullable load_capacity cannot be null');
        }
        $this->container['load_capacity'] = $load_capacity;

        return $this;
    }

    /**
     * Gets temperature
     *
     * @return \MagDv\Cargomart\Dto\TemperatureRange|null
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     *
     * @param \MagDv\Cargomart\Dto\TemperatureRange|null $temperature temperature
     *
     * @return self
     */
    public function setTemperature($temperature)
    {
        if (is_null($temperature)) {
            array_push($this->openAPINullablesSetToNull, 'temperature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('temperature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['temperature'] = $temperature;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string[]|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string[]|null $device Дополнительное оборудование машины
     *
     * @return self
     */
    public function setDevice($device)
    {
        if (is_null($device)) {
            throw new \InvalidArgumentException('non-nullable device cannot be null');
        }
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return string[]|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param string[]|null $conditions Условия перевозки
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            throw new \InvalidArgumentException('non-nullable conditions cannot be null');
        }
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            array_push($this->openAPINullablesSetToNull, 'comment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \MagDv\Cargomart\Dto\OrderDraftRoutePoint[]
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \MagDv\Cargomart\Dto\OrderDraftRoutePoint[] $points Список маршрутных точек заказа
     *
     * @return self
     */
    public function setPoints($points)
    {
        if (is_null($points)) {
            throw new \InvalidArgumentException('non-nullable points cannot be null');
        }
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id Внешний идентификатор заказа
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string[]|null
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string[]|null $tag Тэги для заказа
     *
     * @return self
     */
    public function setTag($tag)
    {
        if (is_null($tag)) {
            throw new \InvalidArgumentException('non-nullable tag cannot be null');
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets comment_for_consignor
     *
     * @return string
     */
    public function getCommentForConsignor()
    {
        return $this->container['comment_for_consignor'];
    }

    /**
     * Sets comment_for_consignor
     *
     * @param string $comment_for_consignor Комментарий для заказчика
     *
     * @return self
     */
    public function setCommentForConsignor($comment_for_consignor)
    {
        if (is_null($comment_for_consignor)) {
            throw new \InvalidArgumentException('non-nullable comment_for_consignor cannot be null');
        }
        $this->container['comment_for_consignor'] = $comment_for_consignor;

        return $this;
    }

    /**
     * Gets comment_for_carrier
     *
     * @return string|null
     */
    public function getCommentForCarrier()
    {
        return $this->container['comment_for_carrier'];
    }

    /**
     * Sets comment_for_carrier
     *
     * @param string|null $comment_for_carrier comment_for_carrier
     *
     * @return self
     */
    public function setCommentForCarrier($comment_for_carrier)
    {
        if (is_null($comment_for_carrier)) {
            array_push($this->openAPINullablesSetToNull, 'comment_for_carrier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment_for_carrier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment_for_carrier'] = $comment_for_carrier;

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


