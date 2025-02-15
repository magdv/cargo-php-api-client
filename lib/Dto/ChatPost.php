<?php
/**
 * ChatPost
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
 * ChatPost Class Doc Comment
 *
 * @category Class
 * @description Сообщение чата
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChatPost implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChatPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company_id' => 'string',
        'creator_id' => 'int',
        'creator' => '\MagDv\Cargomart\Dto\ChatPostCreator',
        'kind' => '\MagDv\Cargomart\Dto\ChatPostKindEnum',
        'type' => '\MagDv\Cargomart\Dto\ChatPostTypeEnum',
        'payload' => '\MagDv\Cargomart\Dto\ChatPostPayload',
        'message' => 'string',
        'create_date' => '\DateTime',
        'user_data' => '\MagDv\Cargomart\Dto\ChatPostUserData',
        'access' => '\MagDv\Cargomart\Dto\ChatPostAccess'
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
        'company_id' => null,
        'creator_id' => null,
        'creator' => null,
        'kind' => null,
        'type' => null,
        'payload' => null,
        'message' => null,
        'create_date' => 'date-time',
        'user_data' => null,
        'access' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'company_id' => false,
        'creator_id' => false,
        'creator' => false,
        'kind' => false,
        'type' => false,
        'payload' => false,
        'message' => false,
        'create_date' => false,
        'user_data' => false,
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
        'company_id' => 'companyId',
        'creator_id' => 'creatorId',
        'creator' => 'creator',
        'kind' => 'kind',
        'type' => 'type',
        'payload' => 'payload',
        'message' => 'message',
        'create_date' => 'createDate',
        'user_data' => 'userData',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'creator_id' => 'setCreatorId',
        'creator' => 'setCreator',
        'kind' => 'setKind',
        'type' => 'setType',
        'payload' => 'setPayload',
        'message' => 'setMessage',
        'create_date' => 'setCreateDate',
        'user_data' => 'setUserData',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'creator_id' => 'getCreatorId',
        'creator' => 'getCreator',
        'kind' => 'getKind',
        'type' => 'getType',
        'payload' => 'getPayload',
        'message' => 'getMessage',
        'create_date' => 'getCreateDate',
        'user_data' => 'getUserData',
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
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('kind', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('user_data', $data ?? [], null);
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
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['create_date'] === null) {
            $invalidProperties[] = "'create_date' can't be null";
        }
        if ($this->container['user_data'] === null) {
            $invalidProperties[] = "'user_data' can't be null";
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
     * @param int $id Идентификатор сообщения
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
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id Идентификатор компании автора сообщения
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
     * Gets creator_id
     *
     * @return int|null
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int|null $creator_id Идентификатор пользователя, автора сообщения
     *
     * @return self
     */
    public function setCreatorId($creator_id)
    {
        if (is_null($creator_id)) {
            throw new \InvalidArgumentException('non-nullable creator_id cannot be null');
        }
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \MagDv\Cargomart\Dto\ChatPostCreator|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \MagDv\Cargomart\Dto\ChatPostCreator|null $creator Данные пользователя, автора сообщения
     *
     * @return self
     */
    public function setCreator($creator)
    {
        if (is_null($creator)) {
            throw new \InvalidArgumentException('non-nullable creator cannot be null');
        }
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return \MagDv\Cargomart\Dto\ChatPostKindEnum
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param \MagDv\Cargomart\Dto\ChatPostKindEnum $kind Тип записи
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \MagDv\Cargomart\Dto\ChatPostTypeEnum
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MagDv\Cargomart\Dto\ChatPostTypeEnum $type Тип сообщения чата
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return \MagDv\Cargomart\Dto\ChatPostPayload|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \MagDv\Cargomart\Dto\ChatPostPayload|null $payload Дополнительные данные сообщения
     *
     * @return self
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Текст сообщения
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date Дата создания
     *
     * @return self
     */
    public function setCreateDate($create_date)
    {
        if (is_null($create_date)) {
            throw new \InvalidArgumentException('non-nullable create_date cannot be null');
        }
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return \MagDv\Cargomart\Dto\ChatPostUserData
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param \MagDv\Cargomart\Dto\ChatPostUserData $user_data Данные текущего пользователя по сообщению
     *
     * @return self
     */
    public function setUserData($user_data)
    {
        if (is_null($user_data)) {
            throw new \InvalidArgumentException('non-nullable user_data cannot be null');
        }
        $this->container['user_data'] = $user_data;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\ChatPostAccess
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\ChatPostAccess $access Объект доступа
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


