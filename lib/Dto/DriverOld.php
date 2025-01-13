<?php
/**
 * DriverOld
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
 * DriverOld Class Doc Comment
 *
 * @category Class
 * @description Старая модель. Пришла из v1. deprecated.
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DriverOld implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'driver-old';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'phone' => 'string',
        'phones' => 'string[]',
        'license_number' => 'string',
        'licence_issue_date' => '\DateTime',
        'passport_series' => 'string',
        'passport_number' => 'string',
        'passport_when' => '\DateTime',
        'passport_by' => 'string',
        'birth_date' => '\DateTime',
        'driver_license' => '\MagDv\Cargomart\Dto\DriverOldDriverLicenseInner[]',
        'access' => '\MagDv\Cargomart\Dto\DriverAccess'
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
        'name' => null,
        'phone' => null,
        'phones' => null,
        'license_number' => null,
        'licence_issue_date' => 'date',
        'passport_series' => null,
        'passport_number' => null,
        'passport_when' => 'date',
        'passport_by' => null,
        'birth_date' => 'date',
        'driver_license' => null,
        'access' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'phone' => false,
        'phones' => false,
        'license_number' => false,
        'licence_issue_date' => false,
        'passport_series' => false,
        'passport_number' => false,
        'passport_when' => false,
        'passport_by' => false,
        'birth_date' => false,
        'driver_license' => false,
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
        'name' => 'name',
        'phone' => 'phone',
        'phones' => 'phones',
        'license_number' => 'licenseNumber',
        'licence_issue_date' => 'licenceIssueDate',
        'passport_series' => 'passportSeries',
        'passport_number' => 'passportNumber',
        'passport_when' => 'passportWhen',
        'passport_by' => 'passportBy',
        'birth_date' => 'birthDate',
        'driver_license' => 'driverLicense',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'phone' => 'setPhone',
        'phones' => 'setPhones',
        'license_number' => 'setLicenseNumber',
        'licence_issue_date' => 'setLicenceIssueDate',
        'passport_series' => 'setPassportSeries',
        'passport_number' => 'setPassportNumber',
        'passport_when' => 'setPassportWhen',
        'passport_by' => 'setPassportBy',
        'birth_date' => 'setBirthDate',
        'driver_license' => 'setDriverLicense',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'phone' => 'getPhone',
        'phones' => 'getPhones',
        'license_number' => 'getLicenseNumber',
        'licence_issue_date' => 'getLicenceIssueDate',
        'passport_series' => 'getPassportSeries',
        'passport_number' => 'getPassportNumber',
        'passport_when' => 'getPassportWhen',
        'passport_by' => 'getPassportBy',
        'birth_date' => 'getBirthDate',
        'driver_license' => 'getDriverLicense',
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('license_number', $data ?? [], null);
        $this->setIfExists('licence_issue_date', $data ?? [], null);
        $this->setIfExists('passport_series', $data ?? [], null);
        $this->setIfExists('passport_number', $data ?? [], null);
        $this->setIfExists('passport_when', $data ?? [], null);
        $this->setIfExists('passport_by', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('driver_license', $data ?? [], null);
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
        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
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
     * @param int $id id водителя
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name ФИО водителя
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone номер телефона
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

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
     * @param string[]|null $phones Список телефонов водителя.
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
     * Gets license_number
     *
     * @return string|null
     */
    public function getLicenseNumber()
    {
        return $this->container['license_number'];
    }

    /**
     * Sets license_number
     *
     * @param string|null $license_number номер водительского удостоверения
     *
     * @return self
     */
    public function setLicenseNumber($license_number)
    {
        if (is_null($license_number)) {
            throw new \InvalidArgumentException('non-nullable license_number cannot be null');
        }
        $this->container['license_number'] = $license_number;

        return $this;
    }

    /**
     * Gets licence_issue_date
     *
     * @return \DateTime|null
     */
    public function getLicenceIssueDate()
    {
        return $this->container['licence_issue_date'];
    }

    /**
     * Sets licence_issue_date
     *
     * @param \DateTime|null $licence_issue_date Дата выдачи водительского удостоверения YYYY-MM-DD
     *
     * @return self
     */
    public function setLicenceIssueDate($licence_issue_date)
    {
        if (is_null($licence_issue_date)) {
            throw new \InvalidArgumentException('non-nullable licence_issue_date cannot be null');
        }
        $this->container['licence_issue_date'] = $licence_issue_date;

        return $this;
    }

    /**
     * Gets passport_series
     *
     * @return string|null
     */
    public function getPassportSeries()
    {
        return $this->container['passport_series'];
    }

    /**
     * Sets passport_series
     *
     * @param string|null $passport_series серия паспорта
     *
     * @return self
     */
    public function setPassportSeries($passport_series)
    {
        if (is_null($passport_series)) {
            throw new \InvalidArgumentException('non-nullable passport_series cannot be null');
        }
        $this->container['passport_series'] = $passport_series;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->container['passport_number'];
    }

    /**
     * Sets passport_number
     *
     * @param string|null $passport_number номер паспорта
     *
     * @return self
     */
    public function setPassportNumber($passport_number)
    {
        if (is_null($passport_number)) {
            throw new \InvalidArgumentException('non-nullable passport_number cannot be null');
        }
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets passport_when
     *
     * @return \DateTime|null
     */
    public function getPassportWhen()
    {
        return $this->container['passport_when'];
    }

    /**
     * Sets passport_when
     *
     * @param \DateTime|null $passport_when когда выдан паспорт
     *
     * @return self
     */
    public function setPassportWhen($passport_when)
    {
        if (is_null($passport_when)) {
            throw new \InvalidArgumentException('non-nullable passport_when cannot be null');
        }
        $this->container['passport_when'] = $passport_when;

        return $this;
    }

    /**
     * Gets passport_by
     *
     * @return string|null
     */
    public function getPassportBy()
    {
        return $this->container['passport_by'];
    }

    /**
     * Sets passport_by
     *
     * @param string|null $passport_by кем выдан паспорт
     *
     * @return self
     */
    public function setPassportBy($passport_by)
    {
        if (is_null($passport_by)) {
            throw new \InvalidArgumentException('non-nullable passport_by cannot be null');
        }
        $this->container['passport_by'] = $passport_by;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime|null $birth_date Дата рождения YYYY-MM-DD
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets driver_license
     *
     * @return \MagDv\Cargomart\Dto\DriverOldDriverLicenseInner[]|null
     */
    public function getDriverLicense()
    {
        return $this->container['driver_license'];
    }

    /**
     * Sets driver_license
     *
     * @param \MagDv\Cargomart\Dto\DriverOldDriverLicenseInner[]|null $driver_license категории водительских прав водителя
     *
     * @return self
     */
    public function setDriverLicense($driver_license)
    {
        if (is_null($driver_license)) {
            throw new \InvalidArgumentException('non-nullable driver_license cannot be null');
        }
        $this->container['driver_license'] = $driver_license;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\DriverAccess
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\DriverAccess $access Объект доступа
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


