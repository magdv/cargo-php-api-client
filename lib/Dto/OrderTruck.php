<?php
/**
 * OrderTruck
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
 * OrderTruck Class Doc Comment
 *
 * @category Class
 * @description Данные транспортного средства в заказе
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderTruck implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order-truck';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'manufacturer' => 'string',
        'number' => 'string',
        'manufacturer_trailer' => 'string',
        'number_trailer' => 'string',
        'carrying_capacity' => 'float',
        'cubic_capacity' => 'float',
        'type_id' => 'int',
        'mode_id' => 'int',
        'ownership_type' => '\MagDv\Cargomart\Dto\TruckOwnershipType',
        'tractor' => '\MagDv\Cargomart\Dto\TractorVehicle',
        'trailer' => '\MagDv\Cargomart\Dto\Vehicle',
        'van' => '\MagDv\Cargomart\Dto\Vehicle',
        'validation_status' => '\MagDv\Cargomart\Dto\TruckValidationStatus',
        'affiliation_type' => '\MagDv\Cargomart\Dto\TruckAffiliationType',
        'company_owner_inn' => 'string',
        'company_owner_name' => 'string',
        'company_owner_address' => 'string',
        'actual_carrier' => '\MagDv\Cargomart\Dto\ActualCarrier',
        'company_owner_country_code' => 'string',
        'owner_country_code' => 'string',
        'phones' => 'string[]',
        'ownership_type_trailer' => '\MagDv\Cargomart\Dto\TruckOwnershipType',
        'registration_country_code_trailer' => 'string',
        'registration_country_code' => 'string'
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
        'manufacturer_trailer' => null,
        'number_trailer' => null,
        'carrying_capacity' => null,
        'cubic_capacity' => null,
        'type_id' => null,
        'mode_id' => null,
        'ownership_type' => null,
        'tractor' => null,
        'trailer' => null,
        'van' => null,
        'validation_status' => null,
        'affiliation_type' => null,
        'company_owner_inn' => null,
        'company_owner_name' => null,
        'company_owner_address' => null,
        'actual_carrier' => null,
        'company_owner_country_code' => null,
        'owner_country_code' => null,
        'phones' => null,
        'ownership_type_trailer' => null,
        'registration_country_code_trailer' => null,
        'registration_country_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'manufacturer' => false,
        'number' => false,
        'manufacturer_trailer' => false,
        'number_trailer' => false,
        'carrying_capacity' => false,
        'cubic_capacity' => false,
        'type_id' => false,
        'mode_id' => false,
        'ownership_type' => false,
        'tractor' => false,
        'trailer' => false,
        'van' => false,
        'validation_status' => false,
        'affiliation_type' => false,
        'company_owner_inn' => false,
        'company_owner_name' => false,
        'company_owner_address' => false,
        'actual_carrier' => false,
        'company_owner_country_code' => false,
        'owner_country_code' => false,
        'phones' => false,
        'ownership_type_trailer' => false,
        'registration_country_code_trailer' => false,
        'registration_country_code' => false
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
        'manufacturer_trailer' => 'manufacturerTrailer',
        'number_trailer' => 'numberTrailer',
        'carrying_capacity' => 'carryingCapacity',
        'cubic_capacity' => 'cubicCapacity',
        'type_id' => 'typeId',
        'mode_id' => 'modeId',
        'ownership_type' => 'ownershipType',
        'tractor' => 'tractor',
        'trailer' => 'trailer',
        'van' => 'van',
        'validation_status' => 'validationStatus',
        'affiliation_type' => 'affiliationType',
        'company_owner_inn' => 'companyOwnerInn',
        'company_owner_name' => 'companyOwnerName',
        'company_owner_address' => 'companyOwnerAddress',
        'actual_carrier' => 'actualCarrier',
        'company_owner_country_code' => 'companyOwnerCountryCode',
        'owner_country_code' => 'ownerCountryCode',
        'phones' => 'phones',
        'ownership_type_trailer' => 'ownershipTypeTrailer',
        'registration_country_code_trailer' => 'registrationCountryCodeTrailer',
        'registration_country_code' => 'registrationCountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'manufacturer' => 'setManufacturer',
        'number' => 'setNumber',
        'manufacturer_trailer' => 'setManufacturerTrailer',
        'number_trailer' => 'setNumberTrailer',
        'carrying_capacity' => 'setCarryingCapacity',
        'cubic_capacity' => 'setCubicCapacity',
        'type_id' => 'setTypeId',
        'mode_id' => 'setModeId',
        'ownership_type' => 'setOwnershipType',
        'tractor' => 'setTractor',
        'trailer' => 'setTrailer',
        'van' => 'setVan',
        'validation_status' => 'setValidationStatus',
        'affiliation_type' => 'setAffiliationType',
        'company_owner_inn' => 'setCompanyOwnerInn',
        'company_owner_name' => 'setCompanyOwnerName',
        'company_owner_address' => 'setCompanyOwnerAddress',
        'actual_carrier' => 'setActualCarrier',
        'company_owner_country_code' => 'setCompanyOwnerCountryCode',
        'owner_country_code' => 'setOwnerCountryCode',
        'phones' => 'setPhones',
        'ownership_type_trailer' => 'setOwnershipTypeTrailer',
        'registration_country_code_trailer' => 'setRegistrationCountryCodeTrailer',
        'registration_country_code' => 'setRegistrationCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'manufacturer' => 'getManufacturer',
        'number' => 'getNumber',
        'manufacturer_trailer' => 'getManufacturerTrailer',
        'number_trailer' => 'getNumberTrailer',
        'carrying_capacity' => 'getCarryingCapacity',
        'cubic_capacity' => 'getCubicCapacity',
        'type_id' => 'getTypeId',
        'mode_id' => 'getModeId',
        'ownership_type' => 'getOwnershipType',
        'tractor' => 'getTractor',
        'trailer' => 'getTrailer',
        'van' => 'getVan',
        'validation_status' => 'getValidationStatus',
        'affiliation_type' => 'getAffiliationType',
        'company_owner_inn' => 'getCompanyOwnerInn',
        'company_owner_name' => 'getCompanyOwnerName',
        'company_owner_address' => 'getCompanyOwnerAddress',
        'actual_carrier' => 'getActualCarrier',
        'company_owner_country_code' => 'getCompanyOwnerCountryCode',
        'owner_country_code' => 'getOwnerCountryCode',
        'phones' => 'getPhones',
        'ownership_type_trailer' => 'getOwnershipTypeTrailer',
        'registration_country_code_trailer' => 'getRegistrationCountryCodeTrailer',
        'registration_country_code' => 'getRegistrationCountryCode'
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
        $this->setIfExists('manufacturer_trailer', $data ?? [], null);
        $this->setIfExists('number_trailer', $data ?? [], null);
        $this->setIfExists('carrying_capacity', $data ?? [], null);
        $this->setIfExists('cubic_capacity', $data ?? [], null);
        $this->setIfExists('type_id', $data ?? [], null);
        $this->setIfExists('mode_id', $data ?? [], null);
        $this->setIfExists('ownership_type', $data ?? [], null);
        $this->setIfExists('tractor', $data ?? [], null);
        $this->setIfExists('trailer', $data ?? [], null);
        $this->setIfExists('van', $data ?? [], null);
        $this->setIfExists('validation_status', $data ?? [], null);
        $this->setIfExists('affiliation_type', $data ?? [], null);
        $this->setIfExists('company_owner_inn', $data ?? [], null);
        $this->setIfExists('company_owner_name', $data ?? [], null);
        $this->setIfExists('company_owner_address', $data ?? [], null);
        $this->setIfExists('actual_carrier', $data ?? [], null);
        $this->setIfExists('company_owner_country_code', $data ?? [], null);
        $this->setIfExists('owner_country_code', $data ?? [], null);
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('ownership_type_trailer', $data ?? [], null);
        $this->setIfExists('registration_country_code_trailer', $data ?? [], null);
        $this->setIfExists('registration_country_code', $data ?? [], null);
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
     * @deprecated
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer @deprecated Использовать tractor, trailer, van. Марка ТС
     *
     * @return self
     * @deprecated
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
     * @deprecated
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number @deprecated Использовать tractor, trailer, van. Гос.номер ТС
     *
     * @return self
     * @deprecated
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
     * Gets manufacturer_trailer
     *
     * @return string|null
     * @deprecated
     */
    public function getManufacturerTrailer()
    {
        return $this->container['manufacturer_trailer'];
    }

    /**
     * Sets manufacturer_trailer
     *
     * @param string|null $manufacturer_trailer @deprecated Использовать tractor, trailer, van. Марка прицепа ТС
     *
     * @return self
     * @deprecated
     */
    public function setManufacturerTrailer($manufacturer_trailer)
    {
        if (is_null($manufacturer_trailer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_trailer cannot be null');
        }
        $this->container['manufacturer_trailer'] = $manufacturer_trailer;

        return $this;
    }

    /**
     * Gets number_trailer
     *
     * @return string|null
     * @deprecated
     */
    public function getNumberTrailer()
    {
        return $this->container['number_trailer'];
    }

    /**
     * Sets number_trailer
     *
     * @param string|null $number_trailer @deprecated Использовать tractor, trailer, van. Гос.номер прицепа ТС
     *
     * @return self
     * @deprecated
     */
    public function setNumberTrailer($number_trailer)
    {
        if (is_null($number_trailer)) {
            throw new \InvalidArgumentException('non-nullable number_trailer cannot be null');
        }
        $this->container['number_trailer'] = $number_trailer;

        return $this;
    }

    /**
     * Gets carrying_capacity
     *
     * @return float|null
     * @deprecated
     */
    public function getCarryingCapacity()
    {
        return $this->container['carrying_capacity'];
    }

    /**
     * Sets carrying_capacity
     *
     * @param float|null $carrying_capacity @deprecated Использовать trailer, van. Грузоподъемность ТС
     *
     * @return self
     * @deprecated
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
     * @deprecated
     */
    public function getCubicCapacity()
    {
        return $this->container['cubic_capacity'];
    }

    /**
     * Sets cubic_capacity
     *
     * @param float|null $cubic_capacity @deprecated Использовать trailer, van. Кубатура ТС
     *
     * @return self
     * @deprecated
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
     * @deprecated
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int|null $type_id @deprecated Использовать trailer, van. Тип кузова
     *
     * @return self
     * @deprecated
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
     * Gets mode_id
     *
     * @return int|null
     */
    public function getModeId()
    {
        return $this->container['mode_id'];
    }

    /**
     * Sets mode_id
     *
     * @param int|null $mode_id Тип ТС
     *
     * @return self
     */
    public function setModeId($mode_id)
    {
        if (is_null($mode_id)) {
            throw new \InvalidArgumentException('non-nullable mode_id cannot be null');
        }
        $this->container['mode_id'] = $mode_id;

        return $this;
    }

    /**
     * Gets ownership_type
     *
     * @return \MagDv\Cargomart\Dto\TruckOwnershipType|null
     * @deprecated
     */
    public function getOwnershipType()
    {
        return $this->container['ownership_type'];
    }

    /**
     * Sets ownership_type
     *
     * @param \MagDv\Cargomart\Dto\TruckOwnershipType|null $ownership_type @deprecated Будет приходить внутри tractor и trailer Тип владения (owned - Собственность, leasing - Лизинг, rent - Аренда, joint_property_spouses - Совместная собственность супругов, free_use - Безвозмездное пользование)
     *
     * @return self
     * @deprecated
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
     * Gets tractor
     *
     * @return \MagDv\Cargomart\Dto\TractorVehicle|null
     */
    public function getTractor()
    {
        return $this->container['tractor'];
    }

    /**
     * Sets tractor
     *
     * @param \MagDv\Cargomart\Dto\TractorVehicle|null $tractor Данные тягача
     *
     * @return self
     */
    public function setTractor($tractor)
    {
        if (is_null($tractor)) {
            throw new \InvalidArgumentException('non-nullable tractor cannot be null');
        }
        $this->container['tractor'] = $tractor;

        return $this;
    }

    /**
     * Gets trailer
     *
     * @return \MagDv\Cargomart\Dto\Vehicle|null
     */
    public function getTrailer()
    {
        return $this->container['trailer'];
    }

    /**
     * Sets trailer
     *
     * @param \MagDv\Cargomart\Dto\Vehicle|null $trailer Данные прицепа
     *
     * @return self
     */
    public function setTrailer($trailer)
    {
        if (is_null($trailer)) {
            throw new \InvalidArgumentException('non-nullable trailer cannot be null');
        }
        $this->container['trailer'] = $trailer;

        return $this;
    }

    /**
     * Gets van
     *
     * @return \MagDv\Cargomart\Dto\Vehicle|null
     */
    public function getVan()
    {
        return $this->container['van'];
    }

    /**
     * Sets van
     *
     * @param \MagDv\Cargomart\Dto\Vehicle|null $van Данные фургона
     *
     * @return self
     */
    public function setVan($van)
    {
        if (is_null($van)) {
            throw new \InvalidArgumentException('non-nullable van cannot be null');
        }
        $this->container['van'] = $van;

        return $this;
    }

    /**
     * Gets validation_status
     *
     * @return \MagDv\Cargomart\Dto\TruckValidationStatus|null
     */
    public function getValidationStatus()
    {
        return $this->container['validation_status'];
    }

    /**
     * Sets validation_status
     *
     * @param \MagDv\Cargomart\Dto\TruckValidationStatus|null $validation_status validation_status
     *
     * @return self
     */
    public function setValidationStatus($validation_status)
    {
        if (is_null($validation_status)) {
            throw new \InvalidArgumentException('non-nullable validation_status cannot be null');
        }
        $this->container['validation_status'] = $validation_status;

        return $this;
    }

    /**
     * Gets affiliation_type
     *
     * @return \MagDv\Cargomart\Dto\TruckAffiliationType|null
     */
    public function getAffiliationType()
    {
        return $this->container['affiliation_type'];
    }

    /**
     * Sets affiliation_type
     *
     * @param \MagDv\Cargomart\Dto\TruckAffiliationType|null $affiliation_type affiliation_type
     *
     * @return self
     */
    public function setAffiliationType($affiliation_type)
    {
        if (is_null($affiliation_type)) {
            throw new \InvalidArgumentException('non-nullable affiliation_type cannot be null');
        }
        $this->container['affiliation_type'] = $affiliation_type;

        return $this;
    }

    /**
     * Gets company_owner_inn
     *
     * @return string|null
     * @deprecated
     */
    public function getCompanyOwnerInn()
    {
        return $this->container['company_owner_inn'];
    }

    /**
     * Sets company_owner_inn
     *
     * @param string|null $company_owner_inn @deprecated будет удалено. юзать actualCarrier
     *
     * @return self
     * @deprecated
     */
    public function setCompanyOwnerInn($company_owner_inn)
    {
        if (is_null($company_owner_inn)) {
            throw new \InvalidArgumentException('non-nullable company_owner_inn cannot be null');
        }
        $this->container['company_owner_inn'] = $company_owner_inn;

        return $this;
    }

    /**
     * Gets company_owner_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCompanyOwnerName()
    {
        return $this->container['company_owner_name'];
    }

    /**
     * Sets company_owner_name
     *
     * @param string|null $company_owner_name @deprecated будет удалено. юзать actualCarrier
     *
     * @return self
     * @deprecated
     */
    public function setCompanyOwnerName($company_owner_name)
    {
        if (is_null($company_owner_name)) {
            throw new \InvalidArgumentException('non-nullable company_owner_name cannot be null');
        }
        $this->container['company_owner_name'] = $company_owner_name;

        return $this;
    }

    /**
     * Gets company_owner_address
     *
     * @return string|null
     * @deprecated
     */
    public function getCompanyOwnerAddress()
    {
        return $this->container['company_owner_address'];
    }

    /**
     * Sets company_owner_address
     *
     * @param string|null $company_owner_address @deprecated будет удалено. юзать actualCarrier
     *
     * @return self
     * @deprecated
     */
    public function setCompanyOwnerAddress($company_owner_address)
    {
        if (is_null($company_owner_address)) {
            throw new \InvalidArgumentException('non-nullable company_owner_address cannot be null');
        }
        $this->container['company_owner_address'] = $company_owner_address;

        return $this;
    }

    /**
     * Gets actual_carrier
     *
     * @return \MagDv\Cargomart\Dto\ActualCarrier|null
     */
    public function getActualCarrier()
    {
        return $this->container['actual_carrier'];
    }

    /**
     * Sets actual_carrier
     *
     * @param \MagDv\Cargomart\Dto\ActualCarrier|null $actual_carrier Фактический перевозчик
     *
     * @return self
     */
    public function setActualCarrier($actual_carrier)
    {
        if (is_null($actual_carrier)) {
            throw new \InvalidArgumentException('non-nullable actual_carrier cannot be null');
        }
        $this->container['actual_carrier'] = $actual_carrier;

        return $this;
    }

    /**
     * Gets company_owner_country_code
     *
     * @return string|null
     * @deprecated
     */
    public function getCompanyOwnerCountryCode()
    {
        return $this->container['company_owner_country_code'];
    }

    /**
     * Sets company_owner_country_code
     *
     * @param string|null $company_owner_country_code @deprecated будет удалено. Код страны компании фактического перевозчика
     *
     * @return self
     * @deprecated
     */
    public function setCompanyOwnerCountryCode($company_owner_country_code)
    {
        if (is_null($company_owner_country_code)) {
            throw new \InvalidArgumentException('non-nullable company_owner_country_code cannot be null');
        }
        $this->container['company_owner_country_code'] = $company_owner_country_code;

        return $this;
    }

    /**
     * Gets owner_country_code
     *
     * @return string|null
     */
    public function getOwnerCountryCode()
    {
        return $this->container['owner_country_code'];
    }

    /**
     * Sets owner_country_code
     *
     * @param string|null $owner_country_code Код страны компании фактического перевозчика
     *
     * @return self
     */
    public function setOwnerCountryCode($owner_country_code)
    {
        if (is_null($owner_country_code)) {
            throw new \InvalidArgumentException('non-nullable owner_country_code cannot be null');
        }
        $this->container['owner_country_code'] = $owner_country_code;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return string[]|null
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string[]|null $phones Список телефонов ТС.
     *
     * @return self
     */
    public function setPhones($phones)
    {
        if (is_null($phones)) {
            throw new \InvalidArgumentException('non-nullable phones cannot be null');
        }
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets ownership_type_trailer
     *
     * @return \MagDv\Cargomart\Dto\TruckOwnershipType|null
     */
    public function getOwnershipTypeTrailer()
    {
        return $this->container['ownership_type_trailer'];
    }

    /**
     * Sets ownership_type_trailer
     *
     * @param \MagDv\Cargomart\Dto\TruckOwnershipType|null $ownership_type_trailer ownership_type_trailer
     *
     * @return self
     */
    public function setOwnershipTypeTrailer($ownership_type_trailer)
    {
        if (is_null($ownership_type_trailer)) {
            throw new \InvalidArgumentException('non-nullable ownership_type_trailer cannot be null');
        }
        $this->container['ownership_type_trailer'] = $ownership_type_trailer;

        return $this;
    }

    /**
     * Gets registration_country_code_trailer
     *
     * @return string|null
     */
    public function getRegistrationCountryCodeTrailer()
    {
        return $this->container['registration_country_code_trailer'];
    }

    /**
     * Sets registration_country_code_trailer
     *
     * @param string|null $registration_country_code_trailer Страна регистрации прицепа
     *
     * @return self
     */
    public function setRegistrationCountryCodeTrailer($registration_country_code_trailer)
    {
        if (is_null($registration_country_code_trailer)) {
            throw new \InvalidArgumentException('non-nullable registration_country_code_trailer cannot be null');
        }
        $this->container['registration_country_code_trailer'] = $registration_country_code_trailer;

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
     * @param string|null $registration_country_code Страна регистрации ТС
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


