<?php
/**
 * ProposalProxyRequest
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
 * ProposalProxyRequest Class Doc Comment
 *
 * @category Class
 * @description Данные пользователя для генерации подписи доверенности
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProposalProxyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'proposal-proxy-request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'serial' => 'string',
        'issuer_name' => 'string',
        'subject_name' => 'string',
        'thumbprint' => 'string',
        'valid_from' => 'string',
        'valid_to' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'serial' => null,
        'issuer_name' => null,
        'subject_name' => null,
        'thumbprint' => null,
        'valid_from' => null,
        'valid_to' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'serial' => false,
        'issuer_name' => false,
        'subject_name' => false,
        'thumbprint' => false,
        'valid_from' => false,
        'valid_to' => false
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
        'name' => 'name',
        'serial' => 'serial',
        'issuer_name' => 'issuerName',
        'subject_name' => 'subjectName',
        'thumbprint' => 'thumbprint',
        'valid_from' => 'validFrom',
        'valid_to' => 'validTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'serial' => 'setSerial',
        'issuer_name' => 'setIssuerName',
        'subject_name' => 'setSubjectName',
        'thumbprint' => 'setThumbprint',
        'valid_from' => 'setValidFrom',
        'valid_to' => 'setValidTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'serial' => 'getSerial',
        'issuer_name' => 'getIssuerName',
        'subject_name' => 'getSubjectName',
        'thumbprint' => 'getThumbprint',
        'valid_from' => 'getValidFrom',
        'valid_to' => 'getValidTo'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('serial', $data ?? [], null);
        $this->setIfExists('issuer_name', $data ?? [], null);
        $this->setIfExists('subject_name', $data ?? [], null);
        $this->setIfExists('thumbprint', $data ?? [], null);
        $this->setIfExists('valid_from', $data ?? [], null);
        $this->setIfExists('valid_to', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['serial'] === null) {
            $invalidProperties[] = "'serial' can't be null";
        }
        if ($this->container['issuer_name'] === null) {
            $invalidProperties[] = "'issuer_name' can't be null";
        }
        if ($this->container['subject_name'] === null) {
            $invalidProperties[] = "'subject_name' can't be null";
        }
        if ($this->container['thumbprint'] === null) {
            $invalidProperties[] = "'thumbprint' can't be null";
        }
        if ($this->container['valid_from'] === null) {
            $invalidProperties[] = "'valid_from' can't be null";
        }
        if ($this->container['valid_to'] === null) {
            $invalidProperties[] = "'valid_to' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Название сертификата ЭЦП
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
     * Gets serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param string $serial Серийный номер сертификата ЭЦП
     *
     * @return self
     */
    public function setSerial($serial)
    {
        if (is_null($serial)) {
            throw new \InvalidArgumentException('non-nullable serial cannot be null');
        }
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets issuer_name
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     *
     * @param string $issuer_name Данные удоствоеряющего центра
     *
     * @return self
     */
    public function setIssuerName($issuer_name)
    {
        if (is_null($issuer_name)) {
            throw new \InvalidArgumentException('non-nullable issuer_name cannot be null');
        }
        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets subject_name
     *
     * @return string
     */
    public function getSubjectName()
    {
        return $this->container['subject_name'];
    }

    /**
     * Sets subject_name
     *
     * @param string $subject_name Владелец ЭЦП
     *
     * @return self
     */
    public function setSubjectName($subject_name)
    {
        if (is_null($subject_name)) {
            throw new \InvalidArgumentException('non-nullable subject_name cannot be null');
        }
        $this->container['subject_name'] = $subject_name;

        return $this;
    }

    /**
     * Gets thumbprint
     *
     * @return string
     */
    public function getThumbprint()
    {
        return $this->container['thumbprint'];
    }

    /**
     * Sets thumbprint
     *
     * @param string $thumbprint Отпечаток ЭЦП
     *
     * @return self
     */
    public function setThumbprint($thumbprint)
    {
        if (is_null($thumbprint)) {
            throw new \InvalidArgumentException('non-nullable thumbprint cannot be null');
        }
        $this->container['thumbprint'] = $thumbprint;

        return $this;
    }

    /**
     * Gets valid_from
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param string $valid_from ЭЦП действительна, от
     *
     * @return self
     */
    public function setValidFrom($valid_from)
    {
        if (is_null($valid_from)) {
            throw new \InvalidArgumentException('non-nullable valid_from cannot be null');
        }
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_to
     *
     * @return string
     */
    public function getValidTo()
    {
        return $this->container['valid_to'];
    }

    /**
     * Sets valid_to
     *
     * @param string $valid_to ЭЦП действительна, до
     *
     * @return self
     */
    public function setValidTo($valid_to)
    {
        if (is_null($valid_to)) {
            throw new \InvalidArgumentException('non-nullable valid_to cannot be null');
        }
        $this->container['valid_to'] = $valid_to;

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

