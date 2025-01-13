<?php
/**
 * TruckItemInV1
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
 * TruckItemInV1 Class Doc Comment
 *
 * @category Class
 * @description объект с детализацией транспортного средства
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TruckItemInV1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'truck-item-in-v1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'truck_manufacturer' => 'string',
        'truck_number' => 'string',
        'truck_manufacturer_trailer' => 'string',
        'truck_number_trailer' => 'string',
        'truck_carrying_capacity' => 'float',
        'truck_cubic_capacity' => 'float',
        'truck_type_id' => 'int',
        'mode_id' => 'int',
        'ownership_type' => '\MagDv\Cargomart\Dto\TruckOwnershipType',
        'ownership_type_document_name' => 'string',
        'ownership_type_document_number' => 'string',
        'ownership_type_document_date' => '\DateTime',
        'validation_status' => '\MagDv\Cargomart\Dto\TruckValidationStatus',
        'affiliation_type' => '\MagDv\Cargomart\Dto\TruckAffiliationType',
        'company_owner_country_code' => 'string',
        'owner_country_code' => 'string',
        'company_owner_inn' => 'string',
        'company_owner_name' => 'string',
        'company_owner_address' => 'string',
        'phones' => 'string[]',
        'pts_file_ids' => 'int[]',
        'is_tracking_allowed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'truck_manufacturer' => null,
        'truck_number' => null,
        'truck_manufacturer_trailer' => null,
        'truck_number_trailer' => null,
        'truck_carrying_capacity' => null,
        'truck_cubic_capacity' => null,
        'truck_type_id' => null,
        'mode_id' => null,
        'ownership_type' => null,
        'ownership_type_document_name' => null,
        'ownership_type_document_number' => null,
        'ownership_type_document_date' => 'date',
        'validation_status' => null,
        'affiliation_type' => null,
        'company_owner_country_code' => null,
        'owner_country_code' => null,
        'company_owner_inn' => null,
        'company_owner_name' => null,
        'company_owner_address' => null,
        'phones' => null,
        'pts_file_ids' => null,
        'is_tracking_allowed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'truck_manufacturer' => false,
        'truck_number' => false,
        'truck_manufacturer_trailer' => false,
        'truck_number_trailer' => false,
        'truck_carrying_capacity' => false,
        'truck_cubic_capacity' => false,
        'truck_type_id' => false,
        'mode_id' => false,
        'ownership_type' => false,
        'ownership_type_document_name' => false,
        'ownership_type_document_number' => false,
        'ownership_type_document_date' => false,
        'validation_status' => false,
        'affiliation_type' => false,
        'company_owner_country_code' => false,
        'owner_country_code' => false,
        'company_owner_inn' => false,
        'company_owner_name' => false,
        'company_owner_address' => false,
        'phones' => false,
        'pts_file_ids' => false,
        'is_tracking_allowed' => false
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
        'truck_manufacturer' => 'truckManufacturer',
        'truck_number' => 'truckNumber',
        'truck_manufacturer_trailer' => 'truckManufacturerTrailer',
        'truck_number_trailer' => 'truckNumberTrailer',
        'truck_carrying_capacity' => 'truckCarryingCapacity',
        'truck_cubic_capacity' => 'truckCubicCapacity',
        'truck_type_id' => 'truckTypeId',
        'mode_id' => 'modeId',
        'ownership_type' => 'ownershipType',
        'ownership_type_document_name' => 'ownershipTypeDocumentName',
        'ownership_type_document_number' => 'ownershipTypeDocumentNumber',
        'ownership_type_document_date' => 'ownershipTypeDocumentDate',
        'validation_status' => 'validationStatus',
        'affiliation_type' => 'affiliationType',
        'company_owner_country_code' => 'companyOwnerCountryCode',
        'owner_country_code' => 'ownerCountryCode',
        'company_owner_inn' => 'companyOwnerInn',
        'company_owner_name' => 'companyOwnerName',
        'company_owner_address' => 'companyOwnerAddress',
        'phones' => 'phones',
        'pts_file_ids' => 'ptsFileIds',
        'is_tracking_allowed' => 'isTrackingAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'truck_manufacturer' => 'setTruckManufacturer',
        'truck_number' => 'setTruckNumber',
        'truck_manufacturer_trailer' => 'setTruckManufacturerTrailer',
        'truck_number_trailer' => 'setTruckNumberTrailer',
        'truck_carrying_capacity' => 'setTruckCarryingCapacity',
        'truck_cubic_capacity' => 'setTruckCubicCapacity',
        'truck_type_id' => 'setTruckTypeId',
        'mode_id' => 'setModeId',
        'ownership_type' => 'setOwnershipType',
        'ownership_type_document_name' => 'setOwnershipTypeDocumentName',
        'ownership_type_document_number' => 'setOwnershipTypeDocumentNumber',
        'ownership_type_document_date' => 'setOwnershipTypeDocumentDate',
        'validation_status' => 'setValidationStatus',
        'affiliation_type' => 'setAffiliationType',
        'company_owner_country_code' => 'setCompanyOwnerCountryCode',
        'owner_country_code' => 'setOwnerCountryCode',
        'company_owner_inn' => 'setCompanyOwnerInn',
        'company_owner_name' => 'setCompanyOwnerName',
        'company_owner_address' => 'setCompanyOwnerAddress',
        'phones' => 'setPhones',
        'pts_file_ids' => 'setPtsFileIds',
        'is_tracking_allowed' => 'setIsTrackingAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'truck_manufacturer' => 'getTruckManufacturer',
        'truck_number' => 'getTruckNumber',
        'truck_manufacturer_trailer' => 'getTruckManufacturerTrailer',
        'truck_number_trailer' => 'getTruckNumberTrailer',
        'truck_carrying_capacity' => 'getTruckCarryingCapacity',
        'truck_cubic_capacity' => 'getTruckCubicCapacity',
        'truck_type_id' => 'getTruckTypeId',
        'mode_id' => 'getModeId',
        'ownership_type' => 'getOwnershipType',
        'ownership_type_document_name' => 'getOwnershipTypeDocumentName',
        'ownership_type_document_number' => 'getOwnershipTypeDocumentNumber',
        'ownership_type_document_date' => 'getOwnershipTypeDocumentDate',
        'validation_status' => 'getValidationStatus',
        'affiliation_type' => 'getAffiliationType',
        'company_owner_country_code' => 'getCompanyOwnerCountryCode',
        'owner_country_code' => 'getOwnerCountryCode',
        'company_owner_inn' => 'getCompanyOwnerInn',
        'company_owner_name' => 'getCompanyOwnerName',
        'company_owner_address' => 'getCompanyOwnerAddress',
        'phones' => 'getPhones',
        'pts_file_ids' => 'getPtsFileIds',
        'is_tracking_allowed' => 'getIsTrackingAllowed'
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
        $this->setIfExists('truck_manufacturer', $data ?? [], null);
        $this->setIfExists('truck_number', $data ?? [], null);
        $this->setIfExists('truck_manufacturer_trailer', $data ?? [], null);
        $this->setIfExists('truck_number_trailer', $data ?? [], null);
        $this->setIfExists('truck_carrying_capacity', $data ?? [], null);
        $this->setIfExists('truck_cubic_capacity', $data ?? [], null);
        $this->setIfExists('truck_type_id', $data ?? [], null);
        $this->setIfExists('mode_id', $data ?? [], null);
        $this->setIfExists('ownership_type', $data ?? [], null);
        $this->setIfExists('ownership_type_document_name', $data ?? [], null);
        $this->setIfExists('ownership_type_document_number', $data ?? [], null);
        $this->setIfExists('ownership_type_document_date', $data ?? [], null);
        $this->setIfExists('validation_status', $data ?? [], null);
        $this->setIfExists('affiliation_type', $data ?? [], null);
        $this->setIfExists('company_owner_country_code', $data ?? [], null);
        $this->setIfExists('owner_country_code', $data ?? [], null);
        $this->setIfExists('company_owner_inn', $data ?? [], null);
        $this->setIfExists('company_owner_name', $data ?? [], null);
        $this->setIfExists('company_owner_address', $data ?? [], null);
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('pts_file_ids', $data ?? [], null);
        $this->setIfExists('is_tracking_allowed', $data ?? [], false);
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
     * Gets truck_manufacturer
     *
     * @return string|null
     */
    public function getTruckManufacturer()
    {
        return $this->container['truck_manufacturer'];
    }

    /**
     * Sets truck_manufacturer
     *
     * @param string|null $truck_manufacturer марка ТС
     *
     * @return self
     */
    public function setTruckManufacturer($truck_manufacturer)
    {
        if (is_null($truck_manufacturer)) {
            throw new \InvalidArgumentException('non-nullable truck_manufacturer cannot be null');
        }
        $this->container['truck_manufacturer'] = $truck_manufacturer;

        return $this;
    }

    /**
     * Gets truck_number
     *
     * @return string|null
     */
    public function getTruckNumber()
    {
        return $this->container['truck_number'];
    }

    /**
     * Sets truck_number
     *
     * @param string|null $truck_number гос.номер ТС
     *
     * @return self
     */
    public function setTruckNumber($truck_number)
    {
        if (is_null($truck_number)) {
            throw new \InvalidArgumentException('non-nullable truck_number cannot be null');
        }
        $this->container['truck_number'] = $truck_number;

        return $this;
    }

    /**
     * Gets truck_manufacturer_trailer
     *
     * @return string|null
     */
    public function getTruckManufacturerTrailer()
    {
        return $this->container['truck_manufacturer_trailer'];
    }

    /**
     * Sets truck_manufacturer_trailer
     *
     * @param string|null $truck_manufacturer_trailer марка прицепа ТС
     *
     * @return self
     */
    public function setTruckManufacturerTrailer($truck_manufacturer_trailer)
    {
        if (is_null($truck_manufacturer_trailer)) {
            throw new \InvalidArgumentException('non-nullable truck_manufacturer_trailer cannot be null');
        }
        $this->container['truck_manufacturer_trailer'] = $truck_manufacturer_trailer;

        return $this;
    }

    /**
     * Gets truck_number_trailer
     *
     * @return string|null
     */
    public function getTruckNumberTrailer()
    {
        return $this->container['truck_number_trailer'];
    }

    /**
     * Sets truck_number_trailer
     *
     * @param string|null $truck_number_trailer гос.номер прицепа ТС
     *
     * @return self
     */
    public function setTruckNumberTrailer($truck_number_trailer)
    {
        if (is_null($truck_number_trailer)) {
            throw new \InvalidArgumentException('non-nullable truck_number_trailer cannot be null');
        }
        $this->container['truck_number_trailer'] = $truck_number_trailer;

        return $this;
    }

    /**
     * Gets truck_carrying_capacity
     *
     * @return float|null
     */
    public function getTruckCarryingCapacity()
    {
        return $this->container['truck_carrying_capacity'];
    }

    /**
     * Sets truck_carrying_capacity
     *
     * @param float|null $truck_carrying_capacity грузоподъемность ТС
     *
     * @return self
     */
    public function setTruckCarryingCapacity($truck_carrying_capacity)
    {
        if (is_null($truck_carrying_capacity)) {
            throw new \InvalidArgumentException('non-nullable truck_carrying_capacity cannot be null');
        }
        $this->container['truck_carrying_capacity'] = $truck_carrying_capacity;

        return $this;
    }

    /**
     * Gets truck_cubic_capacity
     *
     * @return float|null
     */
    public function getTruckCubicCapacity()
    {
        return $this->container['truck_cubic_capacity'];
    }

    /**
     * Sets truck_cubic_capacity
     *
     * @param float|null $truck_cubic_capacity кубатура ТС
     *
     * @return self
     */
    public function setTruckCubicCapacity($truck_cubic_capacity)
    {
        if (is_null($truck_cubic_capacity)) {
            throw new \InvalidArgumentException('non-nullable truck_cubic_capacity cannot be null');
        }
        $this->container['truck_cubic_capacity'] = $truck_cubic_capacity;

        return $this;
    }

    /**
     * Gets truck_type_id
     *
     * @return int|null
     */
    public function getTruckTypeId()
    {
        return $this->container['truck_type_id'];
    }

    /**
     * Sets truck_type_id
     *
     * @param int|null $truck_type_id тип кузова
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
     * @param int|null $mode_id тип ТС
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
     * Gets ownership_type_document_name
     *
     * @return string|null
     */
    public function getOwnershipTypeDocumentName()
    {
        return $this->container['ownership_type_document_name'];
    }

    /**
     * Sets ownership_type_document_name
     *
     * @param string|null $ownership_type_document_name Наименование документа в зависимости от типа владения
     *
     * @return self
     */
    public function setOwnershipTypeDocumentName($ownership_type_document_name)
    {
        if (is_null($ownership_type_document_name)) {
            throw new \InvalidArgumentException('non-nullable ownership_type_document_name cannot be null');
        }
        $this->container['ownership_type_document_name'] = $ownership_type_document_name;

        return $this;
    }

    /**
     * Gets ownership_type_document_number
     *
     * @return string|null
     */
    public function getOwnershipTypeDocumentNumber()
    {
        return $this->container['ownership_type_document_number'];
    }

    /**
     * Sets ownership_type_document_number
     *
     * @param string|null $ownership_type_document_number Номер документа в зависимости от типа владения
     *
     * @return self
     */
    public function setOwnershipTypeDocumentNumber($ownership_type_document_number)
    {
        if (is_null($ownership_type_document_number)) {
            throw new \InvalidArgumentException('non-nullable ownership_type_document_number cannot be null');
        }
        $this->container['ownership_type_document_number'] = $ownership_type_document_number;

        return $this;
    }

    /**
     * Gets ownership_type_document_date
     *
     * @return \DateTime|null
     */
    public function getOwnershipTypeDocumentDate()
    {
        return $this->container['ownership_type_document_date'];
    }

    /**
     * Sets ownership_type_document_date
     *
     * @param \DateTime|null $ownership_type_document_date Дата документа в зависимости от типа владения
     *
     * @return self
     */
    public function setOwnershipTypeDocumentDate($ownership_type_document_date)
    {
        if (is_null($ownership_type_document_date)) {
            throw new \InvalidArgumentException('non-nullable ownership_type_document_date cannot be null');
        }
        $this->container['ownership_type_document_date'] = $ownership_type_document_date;

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
     * Gets company_owner_country_code
     *
     * @return string|null
     */
    public function getCompanyOwnerCountryCode()
    {
        return $this->container['company_owner_country_code'];
    }

    /**
     * Sets company_owner_country_code
     *
     * @param string|null $company_owner_country_code Код страны организации владельца ТС (RUS - Россия, XXX - другая)
     *
     * @return self
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
     * @param string|null $owner_country_code Код страны организации владельца ТС
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
     * Gets company_owner_inn
     *
     * @return string|null
     */
    public function getCompanyOwnerInn()
    {
        return $this->container['company_owner_inn'];
    }

    /**
     * Sets company_owner_inn
     *
     * @param string|null $company_owner_inn ИНН организации владельца ТС
     *
     * @return self
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
     */
    public function getCompanyOwnerName()
    {
        return $this->container['company_owner_name'];
    }

    /**
     * Sets company_owner_name
     *
     * @param string|null $company_owner_name Наименование организации владельца ТС
     *
     * @return self
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
     */
    public function getCompanyOwnerAddress()
    {
        return $this->container['company_owner_address'];
    }

    /**
     * Sets company_owner_address
     *
     * @param string|null $company_owner_address Юридический адрес компании владельца ТС
     *
     * @return self
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
     * @param string[]|null $phones Список телефонов ТС. Не больше 10 номеров.
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
     * Gets pts_file_ids
     *
     * @return int[]|null
     */
    public function getPtsFileIds()
    {
        return $this->container['pts_file_ids'];
    }

    /**
     * Sets pts_file_ids
     *
     * @param int[]|null $pts_file_ids Идентфикаторы файлов ПТС
     *
     * @return self
     */
    public function setPtsFileIds($pts_file_ids)
    {
        if (is_null($pts_file_ids)) {
            throw new \InvalidArgumentException('non-nullable pts_file_ids cannot be null');
        }
        $this->container['pts_file_ids'] = $pts_file_ids;

        return $this;
    }

    /**
     * Gets is_tracking_allowed
     *
     * @return bool|null
     */
    public function getIsTrackingAllowed()
    {
        return $this->container['is_tracking_allowed'];
    }

    /**
     * Sets is_tracking_allowed
     *
     * @param bool|null $is_tracking_allowed Возможность создавать на машину фильтр на отслеживание заказов
     *
     * @return self
     */
    public function setIsTrackingAllowed($is_tracking_allowed)
    {
        if (is_null($is_tracking_allowed)) {
            throw new \InvalidArgumentException('non-nullable is_tracking_allowed cannot be null');
        }
        $this->container['is_tracking_allowed'] = $is_tracking_allowed;

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


