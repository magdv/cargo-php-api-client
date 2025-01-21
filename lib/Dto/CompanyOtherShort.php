<?php
/**
 * CompanyOtherShort
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
 * CompanyOtherShort Class Doc Comment
 *
 * @category Class
 * @description Краткая информация по чужой компании
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyOtherShort implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyOtherShort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'short_name' => 'string',
        'logo' => 'string',
        'is_with_vat' => 'bool',
        'is_direct_sender' => 'bool',
        'inn' => 'string',
        'ogrn' => 'string',
        'kpp' => 'string',
        'status_id' => '\MagDv\Cargomart\Dto\CompanyStatusEnum'
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
        'short_name' => null,
        'logo' => 'uri',
        'is_with_vat' => null,
        'is_direct_sender' => null,
        'inn' => null,
        'ogrn' => null,
        'kpp' => null,
        'status_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'short_name' => false,
        'logo' => false,
        'is_with_vat' => false,
        'is_direct_sender' => false,
        'inn' => false,
        'ogrn' => false,
        'kpp' => false,
        'status_id' => false
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
        'short_name' => 'shortName',
        'logo' => 'logo',
        'is_with_vat' => 'isWithVat',
        'is_direct_sender' => 'isDirectSender',
        'inn' => 'inn',
        'ogrn' => 'ogrn',
        'kpp' => 'kpp',
        'status_id' => 'statusId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'short_name' => 'setShortName',
        'logo' => 'setLogo',
        'is_with_vat' => 'setIsWithVat',
        'is_direct_sender' => 'setIsDirectSender',
        'inn' => 'setInn',
        'ogrn' => 'setOgrn',
        'kpp' => 'setKpp',
        'status_id' => 'setStatusId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'short_name' => 'getShortName',
        'logo' => 'getLogo',
        'is_with_vat' => 'getIsWithVat',
        'is_direct_sender' => 'getIsDirectSender',
        'inn' => 'getInn',
        'ogrn' => 'getOgrn',
        'kpp' => 'getKpp',
        'status_id' => 'getStatusId'
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
        $this->setIfExists('short_name', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('is_with_vat', $data ?? [], true);
        $this->setIfExists('is_direct_sender', $data ?? [], true);
        $this->setIfExists('inn', $data ?? [], null);
        $this->setIfExists('ogrn', $data ?? [], null);
        $this->setIfExists('kpp', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Идентификатор (хэш) клиента
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
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name Краткое название организации
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        if (is_null($short_name)) {
            throw new \InvalidArgumentException('non-nullable short_name cannot be null');
        }
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo Url логотипа
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            throw new \InvalidArgumentException('non-nullable logo cannot be null');
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets is_with_vat
     *
     * @return bool|null
     */
    public function getIsWithVat()
    {
        return $this->container['is_with_vat'];
    }

    /**
     * Sets is_with_vat
     *
     * @param bool|null $is_with_vat Наличие НДС
     *
     * @return self
     */
    public function setIsWithVat($is_with_vat)
    {
        if (is_null($is_with_vat)) {
            throw new \InvalidArgumentException('non-nullable is_with_vat cannot be null');
        }
        $this->container['is_with_vat'] = $is_with_vat;

        return $this;
    }

    /**
     * Gets is_direct_sender
     *
     * @return bool|null
     */
    public function getIsDirectSender()
    {
        return $this->container['is_direct_sender'];
    }

    /**
     * Sets is_direct_sender
     *
     * @param bool|null $is_direct_sender Является прямым отправителем
     *
     * @return self
     */
    public function setIsDirectSender($is_direct_sender)
    {
        if (is_null($is_direct_sender)) {
            throw new \InvalidArgumentException('non-nullable is_direct_sender cannot be null');
        }
        $this->container['is_direct_sender'] = $is_direct_sender;

        return $this;
    }

    /**
     * Gets inn
     *
     * @return string|null
     */
    public function getInn()
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     *
     * @param string|null $inn ИНН организации
     *
     * @return self
     */
    public function setInn($inn)
    {
        if (is_null($inn)) {
            throw new \InvalidArgumentException('non-nullable inn cannot be null');
        }
        $this->container['inn'] = $inn;

        return $this;
    }

    /**
     * Gets ogrn
     *
     * @return string|null
     */
    public function getOgrn()
    {
        return $this->container['ogrn'];
    }

    /**
     * Sets ogrn
     *
     * @param string|null $ogrn ОГРН организации
     *
     * @return self
     */
    public function setOgrn($ogrn)
    {
        if (is_null($ogrn)) {
            throw new \InvalidArgumentException('non-nullable ogrn cannot be null');
        }
        $this->container['ogrn'] = $ogrn;

        return $this;
    }

    /**
     * Gets kpp
     *
     * @return string|null
     */
    public function getKpp()
    {
        return $this->container['kpp'];
    }

    /**
     * Sets kpp
     *
     * @param string|null $kpp КПП организации
     *
     * @return self
     */
    public function setKpp($kpp)
    {
        if (is_null($kpp)) {
            throw new \InvalidArgumentException('non-nullable kpp cannot be null');
        }
        $this->container['kpp'] = $kpp;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return \MagDv\Cargomart\Dto\CompanyStatusEnum|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param \MagDv\Cargomart\Dto\CompanyStatusEnum|null $status_id status_id
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

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


