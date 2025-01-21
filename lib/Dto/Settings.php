<?php
/**
 * Settings
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
 * Settings Class Doc Comment
 *
 * @category Class
 * @description Список настроек компании
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Settings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_use_order_external_id' => 'bool',
        'is_hide_route_addresses' => 'bool',
        'order_external_id_label' => 'string',
        'order_price_check_rate' => 'string',
        'need_approve_driver_truck_changes' => 'bool',
        'status_using_ecn' => '\MagDv\Cargomart\Dto\StatusUsingEcnEnum',
        'access' => '\MagDv\Cargomart\Dto\SettingsAccess'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_use_order_external_id' => null,
        'is_hide_route_addresses' => null,
        'order_external_id_label' => null,
        'order_price_check_rate' => null,
        'need_approve_driver_truck_changes' => null,
        'status_using_ecn' => null,
        'access' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_use_order_external_id' => false,
        'is_hide_route_addresses' => false,
        'order_external_id_label' => false,
        'order_price_check_rate' => false,
        'need_approve_driver_truck_changes' => false,
        'status_using_ecn' => false,
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
        'is_use_order_external_id' => 'isUseOrderExternalId',
        'is_hide_route_addresses' => 'isHideRouteAddresses',
        'order_external_id_label' => 'orderExternalIdLabel',
        'order_price_check_rate' => 'orderPriceCheckRate',
        'need_approve_driver_truck_changes' => 'needApproveDriverTruckChanges',
        'status_using_ecn' => 'statusUsingEcn',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_use_order_external_id' => 'setIsUseOrderExternalId',
        'is_hide_route_addresses' => 'setIsHideRouteAddresses',
        'order_external_id_label' => 'setOrderExternalIdLabel',
        'order_price_check_rate' => 'setOrderPriceCheckRate',
        'need_approve_driver_truck_changes' => 'setNeedApproveDriverTruckChanges',
        'status_using_ecn' => 'setStatusUsingEcn',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_use_order_external_id' => 'getIsUseOrderExternalId',
        'is_hide_route_addresses' => 'getIsHideRouteAddresses',
        'order_external_id_label' => 'getOrderExternalIdLabel',
        'order_price_check_rate' => 'getOrderPriceCheckRate',
        'need_approve_driver_truck_changes' => 'getNeedApproveDriverTruckChanges',
        'status_using_ecn' => 'getStatusUsingEcn',
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
        $this->setIfExists('is_use_order_external_id', $data ?? [], false);
        $this->setIfExists('is_hide_route_addresses', $data ?? [], false);
        $this->setIfExists('order_external_id_label', $data ?? [], null);
        $this->setIfExists('order_price_check_rate', $data ?? [], null);
        $this->setIfExists('need_approve_driver_truck_changes', $data ?? [], false);
        $this->setIfExists('status_using_ecn', $data ?? [], null);
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
     * Gets is_use_order_external_id
     *
     * @return bool|null
     */
    public function getIsUseOrderExternalId()
    {
        return $this->container['is_use_order_external_id'];
    }

    /**
     * Sets is_use_order_external_id
     *
     * @param bool|null $is_use_order_external_id Использовать внешний идентификатор в заказах
     *
     * @return self
     */
    public function setIsUseOrderExternalId($is_use_order_external_id)
    {
        if (is_null($is_use_order_external_id)) {
            throw new \InvalidArgumentException('non-nullable is_use_order_external_id cannot be null');
        }
        $this->container['is_use_order_external_id'] = $is_use_order_external_id;

        return $this;
    }

    /**
     * Gets is_hide_route_addresses
     *
     * @return bool|null
     */
    public function getIsHideRouteAddresses()
    {
        return $this->container['is_hide_route_addresses'];
    }

    /**
     * Sets is_hide_route_addresses
     *
     * @param bool|null $is_hide_route_addresses Скрывать адреса маршрута в торгах
     *
     * @return self
     */
    public function setIsHideRouteAddresses($is_hide_route_addresses)
    {
        if (is_null($is_hide_route_addresses)) {
            throw new \InvalidArgumentException('non-nullable is_hide_route_addresses cannot be null');
        }
        $this->container['is_hide_route_addresses'] = $is_hide_route_addresses;

        return $this;
    }

    /**
     * Gets order_external_id_label
     *
     * @return string|null
     */
    public function getOrderExternalIdLabel()
    {
        return $this->container['order_external_id_label'];
    }

    /**
     * Sets order_external_id_label
     *
     * @param string|null $order_external_id_label Название внешнего идентификатора заказа
     *
     * @return self
     */
    public function setOrderExternalIdLabel($order_external_id_label)
    {
        if (is_null($order_external_id_label)) {
            throw new \InvalidArgumentException('non-nullable order_external_id_label cannot be null');
        }
        $this->container['order_external_id_label'] = $order_external_id_label;

        return $this;
    }

    /**
     * Gets order_price_check_rate
     *
     * @return string|null
     */
    public function getOrderPriceCheckRate()
    {
        return $this->container['order_price_check_rate'];
    }

    /**
     * Sets order_price_check_rate
     *
     * @param string|null $order_price_check_rate Коэффициент от рекомендованной цены, для проверки попадания цены заказа
     *
     * @return self
     */
    public function setOrderPriceCheckRate($order_price_check_rate)
    {
        if (is_null($order_price_check_rate)) {
            throw new \InvalidArgumentException('non-nullable order_price_check_rate cannot be null');
        }
        $this->container['order_price_check_rate'] = $order_price_check_rate;

        return $this;
    }

    /**
     * Gets need_approve_driver_truck_changes
     *
     * @return bool|null
     */
    public function getNeedApproveDriverTruckChanges()
    {
        return $this->container['need_approve_driver_truck_changes'];
    }

    /**
     * Sets need_approve_driver_truck_changes
     *
     * @param bool|null $need_approve_driver_truck_changes Необходимость согласовывать изменения водителя или машины у перевозчика
     *
     * @return self
     */
    public function setNeedApproveDriverTruckChanges($need_approve_driver_truck_changes)
    {
        if (is_null($need_approve_driver_truck_changes)) {
            throw new \InvalidArgumentException('non-nullable need_approve_driver_truck_changes cannot be null');
        }
        $this->container['need_approve_driver_truck_changes'] = $need_approve_driver_truck_changes;

        return $this;
    }

    /**
     * Gets status_using_ecn
     *
     * @return \MagDv\Cargomart\Dto\StatusUsingEcnEnum|null
     */
    public function getStatusUsingEcn()
    {
        return $this->container['status_using_ecn'];
    }

    /**
     * Sets status_using_ecn
     *
     * @param \MagDv\Cargomart\Dto\StatusUsingEcnEnum|null $status_using_ecn status_using_ecn
     *
     * @return self
     */
    public function setStatusUsingEcn($status_using_ecn)
    {
        if (is_null($status_using_ecn)) {
            throw new \InvalidArgumentException('non-nullable status_using_ecn cannot be null');
        }
        $this->container['status_using_ecn'] = $status_using_ecn;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\SettingsAccess|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\SettingsAccess|null $access access
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


