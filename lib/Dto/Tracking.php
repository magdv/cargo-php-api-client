<?php
/**
 * Tracking
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
 * Tracking Class Doc Comment
 *
 * @category Class
 * @description Объект отслеживания заказов
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Tracking implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tracking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'is_active' => 'bool',
        'departure' => 'string',
        'departure_radius' => 'int',
        'destination' => 'string',
        'destination_radius' => 'int',
        'with_reverse' => 'bool',
        'weight_from' => 'float',
        'weight_to' => 'float',
        'capacity_from' => 'int',
        'capacity_to' => 'int',
        'consignor' => 'string',
        'truck_type' => 'int[]',
        'track_orders' => 'bool',
        'track_tender_lots' => 'bool',
        'access' => '\MagDv\Cargomart\Dto\TrackingAccess'
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
        'is_active' => null,
        'departure' => null,
        'departure_radius' => null,
        'destination' => null,
        'destination_radius' => null,
        'with_reverse' => null,
        'weight_from' => null,
        'weight_to' => null,
        'capacity_from' => null,
        'capacity_to' => null,
        'consignor' => null,
        'truck_type' => null,
        'track_orders' => null,
        'track_tender_lots' => null,
        'access' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'is_active' => false,
        'departure' => false,
        'departure_radius' => false,
        'destination' => false,
        'destination_radius' => false,
        'with_reverse' => false,
        'weight_from' => false,
        'weight_to' => false,
        'capacity_from' => false,
        'capacity_to' => false,
        'consignor' => false,
        'truck_type' => false,
        'track_orders' => false,
        'track_tender_lots' => false,
        'access' => false
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
        'is_active' => 'isActive',
        'departure' => 'departure',
        'departure_radius' => 'departureRadius',
        'destination' => 'destination',
        'destination_radius' => 'destinationRadius',
        'with_reverse' => 'withReverse',
        'weight_from' => 'weightFrom',
        'weight_to' => 'weightTo',
        'capacity_from' => 'capacityFrom',
        'capacity_to' => 'capacityTo',
        'consignor' => 'consignor',
        'truck_type' => 'truckType',
        'track_orders' => 'trackOrders',
        'track_tender_lots' => 'trackTenderLots',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'departure' => 'setDeparture',
        'departure_radius' => 'setDepartureRadius',
        'destination' => 'setDestination',
        'destination_radius' => 'setDestinationRadius',
        'with_reverse' => 'setWithReverse',
        'weight_from' => 'setWeightFrom',
        'weight_to' => 'setWeightTo',
        'capacity_from' => 'setCapacityFrom',
        'capacity_to' => 'setCapacityTo',
        'consignor' => 'setConsignor',
        'truck_type' => 'setTruckType',
        'track_orders' => 'setTrackOrders',
        'track_tender_lots' => 'setTrackTenderLots',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'departure' => 'getDeparture',
        'departure_radius' => 'getDepartureRadius',
        'destination' => 'getDestination',
        'destination_radius' => 'getDestinationRadius',
        'with_reverse' => 'getWithReverse',
        'weight_from' => 'getWeightFrom',
        'weight_to' => 'getWeightTo',
        'capacity_from' => 'getCapacityFrom',
        'capacity_to' => 'getCapacityTo',
        'consignor' => 'getConsignor',
        'truck_type' => 'getTruckType',
        'track_orders' => 'getTrackOrders',
        'track_tender_lots' => 'getTrackTenderLots',
        'access' => 'getAccess'
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
        $this->setIfExists('is_active', $data ?? [], false);
        $this->setIfExists('departure', $data ?? [], null);
        $this->setIfExists('departure_radius', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('destination_radius', $data ?? [], null);
        $this->setIfExists('with_reverse', $data ?? [], false);
        $this->setIfExists('weight_from', $data ?? [], null);
        $this->setIfExists('weight_to', $data ?? [], null);
        $this->setIfExists('capacity_from', $data ?? [], null);
        $this->setIfExists('capacity_to', $data ?? [], null);
        $this->setIfExists('consignor', $data ?? [], null);
        $this->setIfExists('truck_type', $data ?? [], null);
        $this->setIfExists('track_orders', $data ?? [], true);
        $this->setIfExists('track_tender_lots', $data ?? [], true);
        $this->setIfExists('access', $data ?? [], null);
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Идентификатор
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
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active Флаг активности
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return string|null
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param string|null $departure Код кладр отправления
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        if (is_null($departure)) {
            throw new \InvalidArgumentException('non-nullable departure cannot be null');
        }
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets departure_radius
     *
     * @return int|null
     */
    public function getDepartureRadius()
    {
        return $this->container['departure_radius'];
    }

    /**
     * Sets departure_radius
     *
     * @param int|null $departure_radius Радиус отправления
     *
     * @return self
     */
    public function setDepartureRadius($departure_radius)
    {
        if (is_null($departure_radius)) {
            throw new \InvalidArgumentException('non-nullable departure_radius cannot be null');
        }
        $this->container['departure_radius'] = $departure_radius;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string|null
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string|null $destination Код кладр назначения
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets destination_radius
     *
     * @return int|null
     */
    public function getDestinationRadius()
    {
        return $this->container['destination_radius'];
    }

    /**
     * Sets destination_radius
     *
     * @param int|null $destination_radius Радиус назначения
     *
     * @return self
     */
    public function setDestinationRadius($destination_radius)
    {
        if (is_null($destination_radius)) {
            throw new \InvalidArgumentException('non-nullable destination_radius cannot be null');
        }
        $this->container['destination_radius'] = $destination_radius;

        return $this;
    }

    /**
     * Gets with_reverse
     *
     * @return bool|null
     */
    public function getWithReverse()
    {
        return $this->container['with_reverse'];
    }

    /**
     * Sets with_reverse
     *
     * @param bool|null $with_reverse Отслеживать в обратную сторону
     *
     * @return self
     */
    public function setWithReverse($with_reverse)
    {
        if (is_null($with_reverse)) {
            throw new \InvalidArgumentException('non-nullable with_reverse cannot be null');
        }
        $this->container['with_reverse'] = $with_reverse;

        return $this;
    }

    /**
     * Gets weight_from
     *
     * @return float|null
     */
    public function getWeightFrom()
    {
        return $this->container['weight_from'];
    }

    /**
     * Sets weight_from
     *
     * @param float|null $weight_from Тоннаж в кг ОТ
     *
     * @return self
     */
    public function setWeightFrom($weight_from)
    {
        if (is_null($weight_from)) {
            throw new \InvalidArgumentException('non-nullable weight_from cannot be null');
        }
        $this->container['weight_from'] = $weight_from;

        return $this;
    }

    /**
     * Gets weight_to
     *
     * @return float|null
     */
    public function getWeightTo()
    {
        return $this->container['weight_to'];
    }

    /**
     * Sets weight_to
     *
     * @param float|null $weight_to Тоннаж в кг ДО
     *
     * @return self
     */
    public function setWeightTo($weight_to)
    {
        if (is_null($weight_to)) {
            throw new \InvalidArgumentException('non-nullable weight_to cannot be null');
        }
        $this->container['weight_to'] = $weight_to;

        return $this;
    }

    /**
     * Gets capacity_from
     *
     * @return int|null
     */
    public function getCapacityFrom()
    {
        return $this->container['capacity_from'];
    }

    /**
     * Sets capacity_from
     *
     * @param int|null $capacity_from Объём груза в м3 ОТ
     *
     * @return self
     */
    public function setCapacityFrom($capacity_from)
    {
        if (is_null($capacity_from)) {
            throw new \InvalidArgumentException('non-nullable capacity_from cannot be null');
        }
        $this->container['capacity_from'] = $capacity_from;

        return $this;
    }

    /**
     * Gets capacity_to
     *
     * @return int|null
     */
    public function getCapacityTo()
    {
        return $this->container['capacity_to'];
    }

    /**
     * Sets capacity_to
     *
     * @param int|null $capacity_to Объём груза в м3 ДО
     *
     * @return self
     */
    public function setCapacityTo($capacity_to)
    {
        if (is_null($capacity_to)) {
            throw new \InvalidArgumentException('non-nullable capacity_to cannot be null');
        }
        $this->container['capacity_to'] = $capacity_to;

        return $this;
    }

    /**
     * Gets consignor
     *
     * @return string|null
     */
    public function getConsignor()
    {
        return $this->container['consignor'];
    }

    /**
     * Sets consignor
     *
     * @param string|null $consignor Хэш код компании отправителя
     *
     * @return self
     */
    public function setConsignor($consignor)
    {
        if (is_null($consignor)) {
            throw new \InvalidArgumentException('non-nullable consignor cannot be null');
        }
        $this->container['consignor'] = $consignor;

        return $this;
    }

    /**
     * Gets truck_type
     *
     * @return int[]|null
     */
    public function getTruckType()
    {
        return $this->container['truck_type'];
    }

    /**
     * Sets truck_type
     *
     * @param int[]|null $truck_type Типы кузовов ТС
     *
     * @return self
     */
    public function setTruckType($truck_type)
    {
        if (is_null($truck_type)) {
            throw new \InvalidArgumentException('non-nullable truck_type cannot be null');
        }
        $this->container['truck_type'] = $truck_type;

        return $this;
    }

    /**
     * Gets track_orders
     *
     * @return bool|null
     */
    public function getTrackOrders()
    {
        return $this->container['track_orders'];
    }

    /**
     * Sets track_orders
     *
     * @param bool|null $track_orders Отслеживать заказы
     *
     * @return self
     */
    public function setTrackOrders($track_orders)
    {
        if (is_null($track_orders)) {
            throw new \InvalidArgumentException('non-nullable track_orders cannot be null');
        }
        $this->container['track_orders'] = $track_orders;

        return $this;
    }

    /**
     * Gets track_tender_lots
     *
     * @return bool|null
     */
    public function getTrackTenderLots()
    {
        return $this->container['track_tender_lots'];
    }

    /**
     * Sets track_tender_lots
     *
     * @param bool|null $track_tender_lots Отслеживать лоты по тендерам
     *
     * @return self
     */
    public function setTrackTenderLots($track_tender_lots)
    {
        if (is_null($track_tender_lots)) {
            throw new \InvalidArgumentException('non-nullable track_tender_lots cannot be null');
        }
        $this->container['track_tender_lots'] = $track_tender_lots;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\TrackingAccess|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\TrackingAccess|null $access access
     *
     * @return self
     */
    public function setAccess($access)
    {
        if (is_null($access)) {
            throw new \InvalidArgumentException('non-nullable access cannot be null');
        }
        $this->container['access'] = $access;

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


