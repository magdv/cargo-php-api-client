<?php
/**
 * OrderReuseRequest
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
 * OrderReuseRequest Class Doc Comment
 *
 * @category Class
 * @description Запрос на экспедиторское переразмещение заказа отправителя.
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderReuseRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderReuseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'route_point' => '\MagDv\Cargomart\Dto\OrderReusePoint[]',
        'company_branch_id' => 'int',
        'truck_type_id' => 'int',
        'temperature' => '\MagDv\Cargomart\Dto\TemperatureRange',
        'device' => 'string[]',
        'conditions' => 'string[]',
        'cargo_type' => 'string',
        'cargo_weight' => 'float',
        'cargo_capacity' => 'int',
        'load_weight' => 'float',
        'load_capacity' => 'int',
        'loading' => 'int[]',
        'carriage_detail' => 'string',
        'price_strategy_type' => '\MagDv\Cargomart\Dto\OrderPriceStrategyType',
        'bidding_type' => '\MagDv\Cargomart\Dto\OrderBiddingType',
        'bidding' => '\MagDv\Cargomart\Dto\OrderDraftExpeditorBidding',
        'price' => 'string',
        'contact' => 'int[]',
        'tag' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'route_point' => null,
        'company_branch_id' => null,
        'truck_type_id' => null,
        'temperature' => null,
        'device' => null,
        'conditions' => null,
        'cargo_type' => null,
        'cargo_weight' => null,
        'cargo_capacity' => null,
        'load_weight' => null,
        'load_capacity' => null,
        'loading' => null,
        'carriage_detail' => null,
        'price_strategy_type' => null,
        'bidding_type' => null,
        'bidding' => null,
        'price' => 'cm-price',
        'contact' => null,
        'tag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'route_point' => false,
        'company_branch_id' => false,
        'truck_type_id' => false,
        'temperature' => true,
        'device' => false,
        'conditions' => false,
        'cargo_type' => false,
        'cargo_weight' => false,
        'cargo_capacity' => false,
        'load_weight' => false,
        'load_capacity' => false,
        'loading' => false,
        'carriage_detail' => false,
        'price_strategy_type' => false,
        'bidding_type' => false,
        'bidding' => false,
        'price' => false,
        'contact' => false,
        'tag' => false
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
        'route_point' => 'routePoint',
        'company_branch_id' => 'companyBranchId',
        'truck_type_id' => 'truckTypeId',
        'temperature' => 'temperature',
        'device' => 'device',
        'conditions' => 'conditions',
        'cargo_type' => 'cargoType',
        'cargo_weight' => 'cargoWeight',
        'cargo_capacity' => 'cargoCapacity',
        'load_weight' => 'loadWeight',
        'load_capacity' => 'loadCapacity',
        'loading' => 'loading',
        'carriage_detail' => 'carriageDetail',
        'price_strategy_type' => 'priceStrategyType',
        'bidding_type' => 'biddingType',
        'bidding' => 'bidding',
        'price' => 'price',
        'contact' => 'contact',
        'tag' => 'tag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'route_point' => 'setRoutePoint',
        'company_branch_id' => 'setCompanyBranchId',
        'truck_type_id' => 'setTruckTypeId',
        'temperature' => 'setTemperature',
        'device' => 'setDevice',
        'conditions' => 'setConditions',
        'cargo_type' => 'setCargoType',
        'cargo_weight' => 'setCargoWeight',
        'cargo_capacity' => 'setCargoCapacity',
        'load_weight' => 'setLoadWeight',
        'load_capacity' => 'setLoadCapacity',
        'loading' => 'setLoading',
        'carriage_detail' => 'setCarriageDetail',
        'price_strategy_type' => 'setPriceStrategyType',
        'bidding_type' => 'setBiddingType',
        'bidding' => 'setBidding',
        'price' => 'setPrice',
        'contact' => 'setContact',
        'tag' => 'setTag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'route_point' => 'getRoutePoint',
        'company_branch_id' => 'getCompanyBranchId',
        'truck_type_id' => 'getTruckTypeId',
        'temperature' => 'getTemperature',
        'device' => 'getDevice',
        'conditions' => 'getConditions',
        'cargo_type' => 'getCargoType',
        'cargo_weight' => 'getCargoWeight',
        'cargo_capacity' => 'getCargoCapacity',
        'load_weight' => 'getLoadWeight',
        'load_capacity' => 'getLoadCapacity',
        'loading' => 'getLoading',
        'carriage_detail' => 'getCarriageDetail',
        'price_strategy_type' => 'getPriceStrategyType',
        'bidding_type' => 'getBiddingType',
        'bidding' => 'getBidding',
        'price' => 'getPrice',
        'contact' => 'getContact',
        'tag' => 'getTag'
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
        $this->setIfExists('route_point', $data ?? [], null);
        $this->setIfExists('company_branch_id', $data ?? [], null);
        $this->setIfExists('truck_type_id', $data ?? [], null);
        $this->setIfExists('temperature', $data ?? [], null);
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
        $this->setIfExists('cargo_type', $data ?? [], null);
        $this->setIfExists('cargo_weight', $data ?? [], null);
        $this->setIfExists('cargo_capacity', $data ?? [], null);
        $this->setIfExists('load_weight', $data ?? [], null);
        $this->setIfExists('load_capacity', $data ?? [], null);
        $this->setIfExists('loading', $data ?? [], null);
        $this->setIfExists('carriage_detail', $data ?? [], null);
        $this->setIfExists('price_strategy_type', $data ?? [], null);
        $this->setIfExists('bidding_type', $data ?? [], null);
        $this->setIfExists('bidding', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
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

        if ($this->container['route_point'] === null) {
            $invalidProperties[] = "'route_point' can't be null";
        }
        if ($this->container['truck_type_id'] === null) {
            $invalidProperties[] = "'truck_type_id' can't be null";
        }
        if ($this->container['price_strategy_type'] === null) {
            $invalidProperties[] = "'price_strategy_type' can't be null";
        }
        if ($this->container['bidding_type'] === null) {
            $invalidProperties[] = "'bidding_type' can't be null";
        }
        if (!is_null($this->container['price']) && !preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['price'])) {
            $invalidProperties[] = "invalid value for 'price', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
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
     * Gets route_point
     *
     * @return \MagDv\Cargomart\Dto\OrderReusePoint[]
     */
    public function getRoutePoint()
    {
        return $this->container['route_point'];
    }

    /**
     * Sets route_point
     *
     * @param \MagDv\Cargomart\Dto\OrderReusePoint[] $route_point route_point
     *
     * @return self
     */
    public function setRoutePoint($route_point)
    {
        if (is_null($route_point)) {
            throw new \InvalidArgumentException('non-nullable route_point cannot be null');
        }
        $this->container['route_point'] = $route_point;

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
     * Gets truck_type_id
     *
     * @return int
     */
    public function getTruckTypeId()
    {
        return $this->container['truck_type_id'];
    }

    /**
     * Sets truck_type_id
     *
     * @param int $truck_type_id Идентификатор типа транспорта
     *
     * @return self
     */
    public function setTruckTypeId($truck_type_id)
    {
        if (is_null($truck_type_id)) {
            throw new \InvalidArgumentException('non-nullable truck_type_id cannot be null');
        }
        $this->container['truck_type_id'] = $truck_type_id;

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
     * Gets cargo_type
     *
     * @return string|null
     */
    public function getCargoType()
    {
        return $this->container['cargo_type'];
    }

    /**
     * Sets cargo_type
     *
     * @param string|null $cargo_type Описание груза
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
     * @return float|null
     */
    public function getCargoWeight()
    {
        return $this->container['cargo_weight'];
    }

    /**
     * Sets cargo_weight
     *
     * @param float|null $cargo_weight Тоннаж авто из условий заказа(в тоннах)
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
     * @return int|null
     */
    public function getCargoCapacity()
    {
        return $this->container['cargo_capacity'];
    }

    /**
     * Sets cargo_capacity
     *
     * @param int|null $cargo_capacity Кубатура авто из условий заказа(в м3)
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
     * Gets loading
     *
     * @return int[]|null
     */
    public function getLoading()
    {
        return $this->container['loading'];
    }

    /**
     * Sets loading
     *
     * @param int[]|null $loading Требуемые типы погрузки-выгрузки
     *
     * @return self
     */
    public function setLoading($loading)
    {
        if (is_null($loading)) {
            throw new \InvalidArgumentException('non-nullable loading cannot be null');
        }
        $this->container['loading'] = $loading;

        return $this;
    }

    /**
     * Gets carriage_detail
     *
     * @return string|null
     */
    public function getCarriageDetail()
    {
        return $this->container['carriage_detail'];
    }

    /**
     * Sets carriage_detail
     *
     * @param string|null $carriage_detail Информация о заказе
     *
     * @return self
     */
    public function setCarriageDetail($carriage_detail)
    {
        if (is_null($carriage_detail)) {
            throw new \InvalidArgumentException('non-nullable carriage_detail cannot be null');
        }
        $this->container['carriage_detail'] = $carriage_detail;

        return $this;
    }

    /**
     * Gets price_strategy_type
     *
     * @return \MagDv\Cargomart\Dto\OrderPriceStrategyType
     */
    public function getPriceStrategyType()
    {
        return $this->container['price_strategy_type'];
    }

    /**
     * Sets price_strategy_type
     *
     * @param \MagDv\Cargomart\Dto\OrderPriceStrategyType $price_strategy_type price_strategy_type
     *
     * @return self
     */
    public function setPriceStrategyType($price_strategy_type)
    {
        if (is_null($price_strategy_type)) {
            throw new \InvalidArgumentException('non-nullable price_strategy_type cannot be null');
        }
        $this->container['price_strategy_type'] = $price_strategy_type;

        return $this;
    }

    /**
     * Gets bidding_type
     *
     * @return \MagDv\Cargomart\Dto\OrderBiddingType
     */
    public function getBiddingType()
    {
        return $this->container['bidding_type'];
    }

    /**
     * Sets bidding_type
     *
     * @param \MagDv\Cargomart\Dto\OrderBiddingType $bidding_type bidding_type
     *
     * @return self
     */
    public function setBiddingType($bidding_type)
    {
        if (is_null($bidding_type)) {
            throw new \InvalidArgumentException('non-nullable bidding_type cannot be null');
        }
        $this->container['bidding_type'] = $bidding_type;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \MagDv\Cargomart\Dto\OrderDraftExpeditorBidding|null
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \MagDv\Cargomart\Dto\OrderDraftExpeditorBidding|null $bidding Настройки торгов
     *
     * @return self
     */
    public function setBidding($bidding)
    {
        if (is_null($bidding)) {
            throw new \InvalidArgumentException('non-nullable bidding cannot be null');
        }
        $this->container['bidding'] = $bidding;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string|null $price Цена перевозки с НДС, если это аукцион/экспресс с ценой заказчика
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($price)))) {
            throw new \InvalidArgumentException("invalid value for \$price when calling OrderReuseRequest., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return int[]|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param int[]|null $contact Список идентификаторов контактных лиц(кураторы)
     *
     * @return self
     */
    public function setContact($contact)
    {
        if (is_null($contact)) {
            throw new \InvalidArgumentException('non-nullable contact cannot be null');
        }
        $this->container['contact'] = $contact;

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
     * @param string[]|null $tag Метки
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


