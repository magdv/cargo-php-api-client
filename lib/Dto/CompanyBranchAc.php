<?php
/**
 * CompanyBranchAc
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
 * CompanyBranchAc Class Doc Comment
 *
 * @category Class
 * @description Дочерняя компания с информацией о головной
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyBranchAc implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'company-branch-ac';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'short_name' => 'string',
        'inn' => 'string',
        'role' => '\MagDv\Cargomart\Dto\ClientRoleEnum',
        'status_id' => '\MagDv\Cargomart\Dto\CompanyStatusEnum',
        'is_main' => 'bool',
        'branch' => '\MagDv\Cargomart\Dto\CompanyBranchChild[]',
        'parent' => '\MagDv\Cargomart\Dto\IdName'
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
        'inn' => null,
        'role' => null,
        'status_id' => null,
        'is_main' => null,
        'branch' => null,
        'parent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'short_name' => false,
        'inn' => false,
        'role' => false,
        'status_id' => false,
        'is_main' => false,
        'branch' => false,
        'parent' => false
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
        'inn' => 'inn',
        'role' => 'role',
        'status_id' => 'statusId',
        'is_main' => 'isMain',
        'branch' => 'branch',
        'parent' => 'parent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'short_name' => 'setShortName',
        'inn' => 'setInn',
        'role' => 'setRole',
        'status_id' => 'setStatusId',
        'is_main' => 'setIsMain',
        'branch' => 'setBranch',
        'parent' => 'setParent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'short_name' => 'getShortName',
        'inn' => 'getInn',
        'role' => 'getRole',
        'status_id' => 'getStatusId',
        'is_main' => 'getIsMain',
        'branch' => 'getBranch',
        'parent' => 'getParent'
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
        $this->setIfExists('inn', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('is_main', $data ?? [], false);
        $this->setIfExists('branch', $data ?? [], null);
        $this->setIfExists('parent', $data ?? [], null);
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
        if ($this->container['short_name'] === null) {
            $invalidProperties[] = "'short_name' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['status_id'] === null) {
            $invalidProperties[] = "'status_id' can't be null";
        }
        if ($this->container['is_main'] === null) {
            $invalidProperties[] = "'is_main' can't be null";
        }
        if ($this->container['parent'] === null) {
            $invalidProperties[] = "'parent' can't be null";
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
     * @param int $id Идентификатор клиента
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
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name Краткое название организации
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
     * Gets role
     *
     * @return \MagDv\Cargomart\Dto\ClientRoleEnum
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \MagDv\Cargomart\Dto\ClientRoleEnum $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return \MagDv\Cargomart\Dto\CompanyStatusEnum
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param \MagDv\Cargomart\Dto\CompanyStatusEnum $status_id status_id
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
     * Gets is_main
     *
     * @return bool
     */
    public function getIsMain()
    {
        return $this->container['is_main'];
    }

    /**
     * Sets is_main
     *
     * @param bool $is_main Является ли головной компанией
     *
     * @return self
     */
    public function setIsMain($is_main)
    {
        if (is_null($is_main)) {
            throw new \InvalidArgumentException('non-nullable is_main cannot be null');
        }
        $this->container['is_main'] = $is_main;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return \MagDv\Cargomart\Dto\CompanyBranchChild[]|null
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param \MagDv\Cargomart\Dto\CompanyBranchChild[]|null $branch Список дочерних компаний, если текущая является головной
     *
     * @return self
     */
    public function setBranch($branch)
    {
        if (is_null($branch)) {
            throw new \InvalidArgumentException('non-nullable branch cannot be null');
        }
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \MagDv\Cargomart\Dto\IdName
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \MagDv\Cargomart\Dto\IdName $parent Головная компания
     *
     * @return self
     */
    public function setParent($parent)
    {
        if (is_null($parent)) {
            throw new \InvalidArgumentException('non-nullable parent cannot be null');
        }
        $this->container['parent'] = $parent;

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


