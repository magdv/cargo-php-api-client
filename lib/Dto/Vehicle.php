<?php
/**
 * Vehicle
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
 * Vehicle Class Doc Comment
 *
 * @category Class
 * @description Данные о прицепе/фургоне
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Vehicle implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Vehicle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'manufacturer' => 'string',
        'number' => 'string',
        'carrying_capacity' => 'float',
        'cubic_capacity' => 'float',
        'type_id' => 'int',
        'registration_country_code' => 'string',
        'ownership_type' => '\MagDv\Cargomart\Dto\TruckOwnershipType',
        'vehicle_owner' => '\MagDv\Cargomart\Dto\VehicleOwner'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'manufacturer' => null,
        'number' => null,
        'carrying_capacity' => null,
        'cubic_capacity' => null,
        'type_id' => null,
        'registration_country_code' => null,
        'ownership_type' => null,
        'vehicle_owner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'manufacturer' => false,
        'number' => false,
        'carrying_capacity' => false,
        'cubic_capacity' => false,
        'type_id' => false,
        'registration_country_code' => false,
        'ownership_type' => false,
        'vehicle_owner' => false
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
        'manufacturer' => 'manufacturer',
        'number' => 'number',
        'carrying_capacity' => 'carryingCapacity',
        'cubic_capacity' => 'cubicCapacity',
        'type_id' => 'typeId',
        'registration_country_code' => 'registrationCountryCode',
        'ownership_type' => 'ownershipType',
        'vehicle_owner' => 'vehicleOwner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manufacturer' => 'setManufacturer',
        'number' => 'setNumber',
        'carrying_capacity' => 'setCarryingCapacity',
        'cubic_capacity' => 'setCubicCapacity',
        'type_id' => 'setTypeId',
        'registration_country_code' => 'setRegistrationCountryCode',
        'ownership_type' => 'setOwnershipType',
        'vehicle_owner' => 'setVehicleOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manufacturer' => 'getManufacturer',
        'number' => 'getNumber',
        'carrying_capacity' => 'getCarryingCapacity',
        'cubic_capacity' => 'getCubicCapacity',
        'type_id' => 'getTypeId',
        'registration_country_code' => 'getRegistrationCountryCode',
        'ownership_type' => 'getOwnershipType',
        'vehicle_owner' => 'getVehicleOwner'
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
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('carrying_capacity', $data ?? [], null);
        $this->setIfExists('cubic_capacity', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('registration_country_code', $data ?? [], null);
        $this->setIfExists('ownership_type', $data ?? [], null);
        $this->setIfExists('vehicle_owner', $data ?? [], null);
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
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Марка
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Гос.номер
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets carrying_capacity
     *
     * @return float|null
     */
    public function getCarryingCapacity()
    {
        return $this->container['carrying_capacity'];
    }

    /**
     * Sets carrying_capacity
     *
     * @param float|null $carrying_capacity Грузоподъемность
     *
     * @return self
     */
    public function setCarryingCapacity($carrying_capacity)
    {
        if (is_null($carrying_capacity)) {
            throw new \InvalidArgumentException('non-nullable carrying_capacity cannot be null');
        }
        $this->container['carrying_capacity'] = $carrying_capacity;

        return $this;
    }

    /**
     * Gets cubic_capacity
     *
     * @return float|null
     */
    public function getCubicCapacity()
    {
        return $this->container['cubic_capacity'];
    }

    /**
     * Sets cubic_capacity
     *
     * @param float|null $cubic_capacity Кубатура
     *
     * @return self
     */
    public function setCubicCapacity($cubic_capacity)
    {
        if (is_null($cubic_capacity)) {
            throw new \InvalidArgumentException('non-nullable cubic_capacity cannot be null');
        }
        $this->container['cubic_capacity'] = $cubic_capacity;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id Тип кузова
     *
     * @return self
     */
    public function setTypeId($type_id)
    {
        if (is_null($type_id)) {
            throw new \InvalidArgumentException('non-nullable type_id cannot be null');
        }
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets registration_country_code
     *
     * @return string|null
     */
    public function getRegistrationCountryCode()
    {
        return $this->container['registration_country_code'];
    }

    /**
     * Sets registration_country_code
     *
     * @param string|null $registration_country_code Страна регистрации
     *
     * @return self
     */
    public function setRegistrationCountryCode($registration_country_code)
    {
        if (is_null($registration_country_code)) {
            throw new \InvalidArgumentException('non-nullable registration_country_code cannot be null');
        }
        $this->container['registration_country_code'] = $registration_country_code;

        return $this;
    }

    /**
     * Gets ownership_type
     *
     * @return \MagDv\Cargomart\Dto\TruckOwnershipType|null
     */
    public function getOwnershipType()
    {
        return $this->container['ownership_type'];
    }

    /**
     * Sets ownership_type
     *
     * @param \MagDv\Cargomart\Dto\TruckOwnershipType|null $ownership_type Тип владения (owned - Собственность, leasing - Лизинг, rent - Аренда, joint_property_spouses - Совместная собственность супругов, free_use - Безвозмездное пользование)
     *
     * @return self
     */
    public function setOwnershipType($ownership_type)
    {
        if (is_null($ownership_type)) {
            throw new \InvalidArgumentException('non-nullable ownership_type cannot be null');
        }
        $this->container['ownership_type'] = $ownership_type;

        return $this;
    }

    /**
     * Gets vehicle_owner
     *
     * @return \MagDv\Cargomart\Dto\VehicleOwner|null
     */
    public function getVehicleOwner()
    {
        return $this->container['vehicle_owner'];
    }

    /**
     * Sets vehicle_owner
     *
     * @param \MagDv\Cargomart\Dto\VehicleOwner|null $vehicle_owner Данные о владельце ТС
     *
     * @return self
     */
    public function setVehicleOwner($vehicle_owner)
    {
        if (is_null($vehicle_owner)) {
            throw new \InvalidArgumentException('non-nullable vehicle_owner cannot be null');
        }
        $this->container['vehicle_owner'] = $vehicle_owner;

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


