<?php
/**
 * DigitalActNonDeliveryCarFields
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
 * DigitalActNonDeliveryCarFields Class Doc Comment
 *
 * @category Class
 * @description Поля электронного акта о неподаче машины
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DigitalActNonDeliveryCarFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DigitalActNonDeliveryCarFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'string',
        'settlement_name' => 'string',
        'shipment_failure_type' => '\MagDv\Cargomart\Dto\OrderActNonDeliveryCarTypeEnum',
        'reason' => 'string',
        'shipper' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany',
        'consignee' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany',
        'expeditor' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany',
        'carrier' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany',
        'order' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarOrder',
        'vehicle' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinVehicle',
        'driver' => '\MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinDriver'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_id' => 'cm-uuid',
        'settlement_name' => null,
        'shipment_failure_type' => null,
        'reason' => null,
        'shipper' => null,
        'consignee' => null,
        'expeditor' => null,
        'carrier' => null,
        'order' => null,
        'vehicle' => null,
        'driver' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order_id' => false,
        'settlement_name' => false,
        'shipment_failure_type' => false,
        'reason' => false,
        'shipper' => false,
        'consignee' => false,
        'expeditor' => false,
        'carrier' => false,
        'order' => false,
        'vehicle' => false,
        'driver' => false
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
        'order_id' => 'orderId',
        'settlement_name' => 'settlementName',
        'shipment_failure_type' => 'shipmentFailureType',
        'reason' => 'reason',
        'shipper' => 'shipper',
        'consignee' => 'consignee',
        'expeditor' => 'expeditor',
        'carrier' => 'carrier',
        'order' => 'order',
        'vehicle' => 'vehicle',
        'driver' => 'driver'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'settlement_name' => 'setSettlementName',
        'shipment_failure_type' => 'setShipmentFailureType',
        'reason' => 'setReason',
        'shipper' => 'setShipper',
        'consignee' => 'setConsignee',
        'expeditor' => 'setExpeditor',
        'carrier' => 'setCarrier',
        'order' => 'setOrder',
        'vehicle' => 'setVehicle',
        'driver' => 'setDriver'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'settlement_name' => 'getSettlementName',
        'shipment_failure_type' => 'getShipmentFailureType',
        'reason' => 'getReason',
        'shipper' => 'getShipper',
        'consignee' => 'getConsignee',
        'expeditor' => 'getExpeditor',
        'carrier' => 'getCarrier',
        'order' => 'getOrder',
        'vehicle' => 'getVehicle',
        'driver' => 'getDriver'
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
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('settlement_name', $data ?? [], null);
        $this->setIfExists('shipment_failure_type', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('shipper', $data ?? [], null);
        $this->setIfExists('consignee', $data ?? [], null);
        $this->setIfExists('expeditor', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('vehicle', $data ?? [], null);
        $this->setIfExists('driver', $data ?? [], null);
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

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['settlement_name'] === null) {
            $invalidProperties[] = "'settlement_name' can't be null";
        }
        if ($this->container['shipment_failure_type'] === null) {
            $invalidProperties[] = "'shipment_failure_type' can't be null";
        }
        if ($this->container['shipper'] === null) {
            $invalidProperties[] = "'shipper' can't be null";
        }
        if ($this->container['consignee'] === null) {
            $invalidProperties[] = "'consignee' can't be null";
        }
        if ($this->container['expeditor'] === null) {
            $invalidProperties[] = "'expeditor' can't be null";
        }
        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
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
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Идентификатор заказа
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets settlement_name
     *
     * @return string
     */
    public function getSettlementName()
    {
        return $this->container['settlement_name'];
    }

    /**
     * Sets settlement_name
     *
     * @param string $settlement_name Наименование населённого пункта составления акта
     *
     * @return self
     */
    public function setSettlementName($settlement_name)
    {
        if (is_null($settlement_name)) {
            throw new \InvalidArgumentException('non-nullable settlement_name cannot be null');
        }
        $this->container['settlement_name'] = $settlement_name;

        return $this;
    }

    /**
     * Gets shipment_failure_type
     *
     * @return \MagDv\Cargomart\Dto\OrderActNonDeliveryCarTypeEnum
     */
    public function getShipmentFailureType()
    {
        return $this->container['shipment_failure_type'];
    }

    /**
     * Sets shipment_failure_type
     *
     * @param \MagDv\Cargomart\Dto\OrderActNonDeliveryCarTypeEnum $shipment_failure_type shipment_failure_type
     *
     * @return self
     */
    public function setShipmentFailureType($shipment_failure_type)
    {
        if (is_null($shipment_failure_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_failure_type cannot be null');
        }
        $this->container['shipment_failure_type'] = $shipment_failure_type;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Сведения о несоответствии машины/водителя
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets shipper
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany $shipper shipper
     *
     * @return self
     */
    public function setShipper($shipper)
    {
        if (is_null($shipper)) {
            throw new \InvalidArgumentException('non-nullable shipper cannot be null');
        }
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets consignee
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany
     */
    public function getConsignee()
    {
        return $this->container['consignee'];
    }

    /**
     * Sets consignee
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany $consignee consignee
     *
     * @return self
     */
    public function setConsignee($consignee)
    {
        if (is_null($consignee)) {
            throw new \InvalidArgumentException('non-nullable consignee cannot be null');
        }
        $this->container['consignee'] = $consignee;

        return $this;
    }

    /**
     * Gets expeditor
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany
     */
    public function getExpeditor()
    {
        return $this->container['expeditor'];
    }

    /**
     * Sets expeditor
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany $expeditor expeditor
     *
     * @return self
     */
    public function setExpeditor($expeditor)
    {
        if (is_null($expeditor)) {
            throw new \InvalidArgumentException('non-nullable expeditor cannot be null');
        }
        $this->container['expeditor'] = $expeditor;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarCompany $carrier carrier
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarOrder $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinVehicle|null
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinVehicle|null $vehicle vehicle
     *
     * @return self
     */
    public function setVehicle($vehicle)
    {
        if (is_null($vehicle)) {
            throw new \InvalidArgumentException('non-nullable vehicle cannot be null');
        }
        $this->container['vehicle'] = $vehicle;

        return $this;
    }

    /**
     * Gets driver
     *
     * @return \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinDriver|null
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     *
     * @param \MagDv\Cargomart\Dto\DigitalActNonDeliveryCarMixinDriver|null $driver driver
     *
     * @return self
     */
    public function setDriver($driver)
    {
        if (is_null($driver)) {
            throw new \InvalidArgumentException('non-nullable driver cannot be null');
        }
        $this->container['driver'] = $driver;

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


