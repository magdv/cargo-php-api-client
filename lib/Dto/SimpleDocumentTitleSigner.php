<?php
/**
 * SimpleDocumentTitleSigner
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
 * SimpleDocumentTitleSigner Class Doc Comment
 *
 * @category Class
 * @description Подписант титула
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SimpleDocumentTitleSigner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SimpleDocumentTitleSigner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'serial_id' => 'int',
        'signer_id' => 'int',
        'signer_name' => 'string',
        'certificate_id' => 'string',
        'certificate_serial_id' => 'int',
        'company_id' => 'string',
        'company_name' => 'string',
        'sign_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'serial_id' => null,
        'signer_id' => null,
        'signer_name' => null,
        'certificate_id' => 'uuid',
        'certificate_serial_id' => null,
        'company_id' => null,
        'company_name' => null,
        'sign_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'serial_id' => false,
        'signer_id' => false,
        'signer_name' => false,
        'certificate_id' => false,
        'certificate_serial_id' => false,
        'company_id' => false,
        'company_name' => false,
        'sign_date' => false
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
        'serial_id' => 'serialId',
        'signer_id' => 'signerId',
        'signer_name' => 'signerName',
        'certificate_id' => 'certificateId',
        'certificate_serial_id' => 'certificateSerialId',
        'company_id' => 'companyId',
        'company_name' => 'companyName',
        'sign_date' => 'signDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'serial_id' => 'setSerialId',
        'signer_id' => 'setSignerId',
        'signer_name' => 'setSignerName',
        'certificate_id' => 'setCertificateId',
        'certificate_serial_id' => 'setCertificateSerialId',
        'company_id' => 'setCompanyId',
        'company_name' => 'setCompanyName',
        'sign_date' => 'setSignDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'serial_id' => 'getSerialId',
        'signer_id' => 'getSignerId',
        'signer_name' => 'getSignerName',
        'certificate_id' => 'getCertificateId',
        'certificate_serial_id' => 'getCertificateSerialId',
        'company_id' => 'getCompanyId',
        'company_name' => 'getCompanyName',
        'sign_date' => 'getSignDate'
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
        $this->setIfExists('serial_id', $data ?? [], null);
        $this->setIfExists('signer_id', $data ?? [], null);
        $this->setIfExists('signer_name', $data ?? [], null);
        $this->setIfExists('certificate_id', $data ?? [], null);
        $this->setIfExists('certificate_serial_id', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('sign_date', $data ?? [], null);
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
        if ($this->container['serial_id'] === null) {
            $invalidProperties[] = "'serial_id' can't be null";
        }
        if ($this->container['signer_id'] === null) {
            $invalidProperties[] = "'signer_id' can't be null";
        }
        if ($this->container['signer_name'] === null) {
            $invalidProperties[] = "'signer_name' can't be null";
        }
        if ($this->container['certificate_id'] === null) {
            $invalidProperties[] = "'certificate_id' can't be null";
        }
        if ($this->container['certificate_serial_id'] === null) {
            $invalidProperties[] = "'certificate_serial_id' can't be null";
        }
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['sign_date'] === null) {
            $invalidProperties[] = "'sign_date' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Идентификатор подписи
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
     * Gets serial_id
     *
     * @return int
     */
    public function getSerialId()
    {
        return $this->container['serial_id'];
    }

    /**
     * Sets serial_id
     *
     * @param int $serial_id Номер подписи в реестре
     *
     * @return self
     */
    public function setSerialId($serial_id)
    {
        if (is_null($serial_id)) {
            throw new \InvalidArgumentException('non-nullable serial_id cannot be null');
        }
        $this->container['serial_id'] = $serial_id;

        return $this;
    }

    /**
     * Gets signer_id
     *
     * @return int
     */
    public function getSignerId()
    {
        return $this->container['signer_id'];
    }

    /**
     * Sets signer_id
     *
     * @param int $signer_id Идентификатор пользователя подписанта
     *
     * @return self
     */
    public function setSignerId($signer_id)
    {
        if (is_null($signer_id)) {
            throw new \InvalidArgumentException('non-nullable signer_id cannot be null');
        }
        $this->container['signer_id'] = $signer_id;

        return $this;
    }

    /**
     * Gets signer_name
     *
     * @return string
     */
    public function getSignerName()
    {
        return $this->container['signer_name'];
    }

    /**
     * Sets signer_name
     *
     * @param string $signer_name ФИО подписанта
     *
     * @return self
     */
    public function setSignerName($signer_name)
    {
        if (is_null($signer_name)) {
            throw new \InvalidArgumentException('non-nullable signer_name cannot be null');
        }
        $this->container['signer_name'] = $signer_name;

        return $this;
    }

    /**
     * Gets certificate_id
     *
     * @return string
     */
    public function getCertificateId()
    {
        return $this->container['certificate_id'];
    }

    /**
     * Sets certificate_id
     *
     * @param string $certificate_id Идентификатор сертификата
     *
     * @return self
     */
    public function setCertificateId($certificate_id)
    {
        if (is_null($certificate_id)) {
            throw new \InvalidArgumentException('non-nullable certificate_id cannot be null');
        }
        $this->container['certificate_id'] = $certificate_id;

        return $this;
    }

    /**
     * Gets certificate_serial_id
     *
     * @return int
     */
    public function getCertificateSerialId()
    {
        return $this->container['certificate_serial_id'];
    }

    /**
     * Sets certificate_serial_id
     *
     * @param int $certificate_serial_id Номер сертификата
     *
     * @return self
     */
    public function setCertificateSerialId($certificate_serial_id)
    {
        if (is_null($certificate_serial_id)) {
            throw new \InvalidArgumentException('non-nullable certificate_serial_id cannot be null');
        }
        $this->container['certificate_serial_id'] = $certificate_serial_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id Идентификатор компании подписанта
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            throw new \InvalidArgumentException('non-nullable company_id cannot be null');
        }
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Название компании подписанта
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets sign_date
     *
     * @return string
     */
    public function getSignDate()
    {
        return $this->container['sign_date'];
    }

    /**
     * Sets sign_date
     *
     * @param string $sign_date Дата подписания титула
     *
     * @return self
     */
    public function setSignDate($sign_date)
    {
        if (is_null($sign_date)) {
            throw new \InvalidArgumentException('non-nullable sign_date cannot be null');
        }
        $this->container['sign_date'] = $sign_date;

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


