<?php
/**
 * OrderEditResponseData
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
 * OrderEditResponseData Class Doc Comment
 *
 * @category Class
 * @description Common response data
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderEditResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderEditResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order' => '\MagDv\Cargomart\Dto\OrderEditItem',
        'company' => '\MagDv\Cargomart\Dto\CompanyShort[]',
        'company_branch' => '\MagDv\Cargomart\Dto\CompanyBranch[]',
        'condition' => '\MagDv\Cargomart\Dto\OrderCondition[]',
        'contact' => '\MagDv\Cargomart\Dto\UserContactShort[]',
        'currency' => '\MagDv\Cargomart\Dto\Currency[]',
        'device' => '\MagDv\Cargomart\Dto\TruckDevice[]',
        'general_partner_contract' => '\MagDv\Cargomart\Dto\GeneralPartnerContract[]',
        'loading_type' => '\MagDv\Cargomart\Dto\LoadingType[]',
        'locality' => '\MagDv\Cargomart\Dto\Locality[]',
        'progress' => '\MagDv\Cargomart\Dto\ProgressItem[]',
        'server_time' => 'string',
        'status' => '\MagDv\Cargomart\Dto\OrderStatus[]',
        'storage_point' => '\MagDv\Cargomart\Dto\PointItem[]',
        'storage_point_contact' => '\MagDv\Cargomart\Dto\ContactItem[]',
        'truck_mode' => '\MagDv\Cargomart\Dto\TruckMode[]',
        'truck_type' => '\MagDv\Cargomart\Dto\TruckType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order' => null,
        'company' => null,
        'company_branch' => null,
        'condition' => null,
        'contact' => null,
        'currency' => null,
        'device' => null,
        'general_partner_contract' => null,
        'loading_type' => null,
        'locality' => null,
        'progress' => null,
        'server_time' => null,
        'status' => null,
        'storage_point' => null,
        'storage_point_contact' => null,
        'truck_mode' => null,
        'truck_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order' => false,
        'company' => false,
        'company_branch' => false,
        'condition' => false,
        'contact' => false,
        'currency' => false,
        'device' => false,
        'general_partner_contract' => false,
        'loading_type' => false,
        'locality' => false,
        'progress' => false,
        'server_time' => false,
        'status' => false,
        'storage_point' => false,
        'storage_point_contact' => false,
        'truck_mode' => false,
        'truck_type' => false
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
        'order' => 'order',
        'company' => 'company',
        'company_branch' => 'companyBranch',
        'condition' => 'condition',
        'contact' => 'contact',
        'currency' => 'currency',
        'device' => 'device',
        'general_partner_contract' => 'generalPartnerContract',
        'loading_type' => 'loadingType',
        'locality' => 'locality',
        'progress' => 'progress',
        'server_time' => 'serverTime',
        'status' => 'status',
        'storage_point' => 'storagePoint',
        'storage_point_contact' => 'storagePointContact',
        'truck_mode' => 'truckMode',
        'truck_type' => 'truckType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'company' => 'setCompany',
        'company_branch' => 'setCompanyBranch',
        'condition' => 'setCondition',
        'contact' => 'setContact',
        'currency' => 'setCurrency',
        'device' => 'setDevice',
        'general_partner_contract' => 'setGeneralPartnerContract',
        'loading_type' => 'setLoadingType',
        'locality' => 'setLocality',
        'progress' => 'setProgress',
        'server_time' => 'setServerTime',
        'status' => 'setStatus',
        'storage_point' => 'setStoragePoint',
        'storage_point_contact' => 'setStoragePointContact',
        'truck_mode' => 'setTruckMode',
        'truck_type' => 'setTruckType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'company' => 'getCompany',
        'company_branch' => 'getCompanyBranch',
        'condition' => 'getCondition',
        'contact' => 'getContact',
        'currency' => 'getCurrency',
        'device' => 'getDevice',
        'general_partner_contract' => 'getGeneralPartnerContract',
        'loading_type' => 'getLoadingType',
        'locality' => 'getLocality',
        'progress' => 'getProgress',
        'server_time' => 'getServerTime',
        'status' => 'getStatus',
        'storage_point' => 'getStoragePoint',
        'storage_point_contact' => 'getStoragePointContact',
        'truck_mode' => 'getTruckMode',
        'truck_type' => 'getTruckType'
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
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('company_branch', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('contact', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('general_partner_contract', $data ?? [], null);
        $this->setIfExists('loading_type', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('progress', $data ?? [], null);
        $this->setIfExists('server_time', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('storage_point', $data ?? [], null);
        $this->setIfExists('storage_point_contact', $data ?? [], null);
        $this->setIfExists('truck_mode', $data ?? [], null);
        $this->setIfExists('truck_type', $data ?? [], null);
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
     * Gets order
     *
     * @return \MagDv\Cargomart\Dto\OrderEditItem
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \MagDv\Cargomart\Dto\OrderEditItem $order order
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
     * Gets company
     *
     * @return \MagDv\Cargomart\Dto\CompanyShort[]|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \MagDv\Cargomart\Dto\CompanyShort[]|null $company Список клиентов
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company_branch
     *
     * @return \MagDv\Cargomart\Dto\CompanyBranch[]|null
     */
    public function getCompanyBranch()
    {
        return $this->container['company_branch'];
    }

    /**
     * Sets company_branch
     *
     * @param \MagDv\Cargomart\Dto\CompanyBranch[]|null $company_branch Список дочерних компаний
     *
     * @return self
     */
    public function setCompanyBranch($company_branch)
    {
        if (is_null($company_branch)) {
            throw new \InvalidArgumentException('non-nullable company_branch cannot be null');
        }
        $this->container['company_branch'] = $company_branch;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \MagDv\Cargomart\Dto\OrderCondition[]|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \MagDv\Cargomart\Dto\OrderCondition[]|null $condition Список условий заказа
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \MagDv\Cargomart\Dto\UserContactShort[]|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \MagDv\Cargomart\Dto\UserContactShort[]|null $contact Список контактов
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
     * Gets currency
     *
     * @return \MagDv\Cargomart\Dto\Currency[]|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \MagDv\Cargomart\Dto\Currency[]|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \MagDv\Cargomart\Dto\TruckDevice[]|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \MagDv\Cargomart\Dto\TruckDevice[]|null $device Список доп оборудования заказа
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
     * Gets general_partner_contract
     *
     * @return \MagDv\Cargomart\Dto\GeneralPartnerContract[]|null
     */
    public function getGeneralPartnerContract()
    {
        return $this->container['general_partner_contract'];
    }

    /**
     * Sets general_partner_contract
     *
     * @param \MagDv\Cargomart\Dto\GeneralPartnerContract[]|null $general_partner_contract Список условий договора с ГП
     *
     * @return self
     */
    public function setGeneralPartnerContract($general_partner_contract)
    {
        if (is_null($general_partner_contract)) {
            throw new \InvalidArgumentException('non-nullable general_partner_contract cannot be null');
        }
        $this->container['general_partner_contract'] = $general_partner_contract;

        return $this;
    }

    /**
     * Gets loading_type
     *
     * @return \MagDv\Cargomart\Dto\LoadingType[]|null
     */
    public function getLoadingType()
    {
        return $this->container['loading_type'];
    }

    /**
     * Sets loading_type
     *
     * @param \MagDv\Cargomart\Dto\LoadingType[]|null $loading_type Список типов погрузки
     *
     * @return self
     */
    public function setLoadingType($loading_type)
    {
        if (is_null($loading_type)) {
            throw new \InvalidArgumentException('non-nullable loading_type cannot be null');
        }
        $this->container['loading_type'] = $loading_type;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return \MagDv\Cargomart\Dto\Locality[]|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param \MagDv\Cargomart\Dto\Locality[]|null $locality Список локаций заказа
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return \MagDv\Cargomart\Dto\ProgressItem[]|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param \MagDv\Cargomart\Dto\ProgressItem[]|null $progress Элемент прогресса
     *
     * @return self
     */
    public function setProgress($progress)
    {
        if (is_null($progress)) {
            throw new \InvalidArgumentException('non-nullable progress cannot be null');
        }
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets server_time
     *
     * @return string|null
     */
    public function getServerTime()
    {
        return $this->container['server_time'];
    }

    /**
     * Sets server_time
     *
     * @param string|null $server_time Время сервера
     *
     * @return self
     */
    public function setServerTime($server_time)
    {
        if (is_null($server_time)) {
            throw new \InvalidArgumentException('non-nullable server_time cannot be null');
        }
        $this->container['server_time'] = $server_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \MagDv\Cargomart\Dto\OrderStatus[]|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \MagDv\Cargomart\Dto\OrderStatus[]|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets storage_point
     *
     * @return \MagDv\Cargomart\Dto\PointItem[]|null
     */
    public function getStoragePoint()
    {
        return $this->container['storage_point'];
    }

    /**
     * Sets storage_point
     *
     * @param \MagDv\Cargomart\Dto\PointItem[]|null $storage_point Список складов
     *
     * @return self
     */
    public function setStoragePoint($storage_point)
    {
        if (is_null($storage_point)) {
            throw new \InvalidArgumentException('non-nullable storage_point cannot be null');
        }
        $this->container['storage_point'] = $storage_point;

        return $this;
    }

    /**
     * Gets storage_point_contact
     *
     * @return \MagDv\Cargomart\Dto\ContactItem[]|null
     */
    public function getStoragePointContact()
    {
        return $this->container['storage_point_contact'];
    }

    /**
     * Sets storage_point_contact
     *
     * @param \MagDv\Cargomart\Dto\ContactItem[]|null $storage_point_contact Список контактов складов
     *
     * @return self
     */
    public function setStoragePointContact($storage_point_contact)
    {
        if (is_null($storage_point_contact)) {
            throw new \InvalidArgumentException('non-nullable storage_point_contact cannot be null');
        }
        $this->container['storage_point_contact'] = $storage_point_contact;

        return $this;
    }

    /**
     * Gets truck_mode
     *
     * @return \MagDv\Cargomart\Dto\TruckMode[]|null
     */
    public function getTruckMode()
    {
        return $this->container['truck_mode'];
    }

    /**
     * Sets truck_mode
     *
     * @param \MagDv\Cargomart\Dto\TruckMode[]|null $truck_mode Список типов транспортных средств
     *
     * @return self
     */
    public function setTruckMode($truck_mode)
    {
        if (is_null($truck_mode)) {
            throw new \InvalidArgumentException('non-nullable truck_mode cannot be null');
        }
        $this->container['truck_mode'] = $truck_mode;

        return $this;
    }

    /**
     * Gets truck_type
     *
     * @return \MagDv\Cargomart\Dto\TruckType[]|null
     */
    public function getTruckType()
    {
        return $this->container['truck_type'];
    }

    /**
     * Sets truck_type
     *
     * @param \MagDv\Cargomart\Dto\TruckType[]|null $truck_type Список типов кузовов
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


