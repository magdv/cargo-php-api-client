<?php
/**
 * OrderPatchLastItem
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
 * OrderPatchLastItem Class Doc Comment
 *
 * @category Class
 * @description Информация по последнему запросу на изменение заказа.
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderPatchLastItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderPatchLastItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => '\MagDv\Cargomart\Dto\OrderPatchType',
        'status_id' => '\MagDv\Cargomart\Dto\OrderPatchStatus',
        'reason' => 'string',
        'comment_for_consignor' => 'string',
        'comment_for_carrier' => 'string',
        'create_date' => '\DateTime',
        'creator_id' => 'int',
        'update_date' => '\DateTime',
        'access' => '\MagDv\Cargomart\Dto\OrderPatchAccess'
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
        'type' => null,
        'status_id' => null,
        'reason' => null,
        'comment_for_consignor' => null,
        'comment_for_carrier' => null,
        'create_date' => 'date-time',
        'creator_id' => null,
        'update_date' => 'date-time',
        'access' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'type' => false,
        'status_id' => false,
        'reason' => false,
        'comment_for_consignor' => false,
        'comment_for_carrier' => false,
        'create_date' => false,
        'creator_id' => false,
        'update_date' => false,
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
        'type' => 'type',
        'status_id' => 'statusId',
        'reason' => 'reason',
        'comment_for_consignor' => 'commentForConsignor',
        'comment_for_carrier' => 'commentForCarrier',
        'create_date' => 'createDate',
        'creator_id' => 'creatorId',
        'update_date' => 'updateDate',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'status_id' => 'setStatusId',
        'reason' => 'setReason',
        'comment_for_consignor' => 'setCommentForConsignor',
        'comment_for_carrier' => 'setCommentForCarrier',
        'create_date' => 'setCreateDate',
        'creator_id' => 'setCreatorId',
        'update_date' => 'setUpdateDate',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'status_id' => 'getStatusId',
        'reason' => 'getReason',
        'comment_for_consignor' => 'getCommentForConsignor',
        'comment_for_carrier' => 'getCommentForCarrier',
        'create_date' => 'getCreateDate',
        'creator_id' => 'getCreatorId',
        'update_date' => 'getUpdateDate',
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('comment_for_consignor', $data ?? [], null);
        $this->setIfExists('comment_for_carrier', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('update_date', $data ?? [], null);
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
        if ($this->container['status_id'] === null) {
            $invalidProperties[] = "'status_id' can't be null";
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
     * @param string $id Идентификатор запроса на изменение
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
     * Gets type
     *
     * @return \MagDv\Cargomart\Dto\OrderPatchType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MagDv\Cargomart\Dto\OrderPatchType|null $type type
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
     * Gets status_id
     *
     * @return \MagDv\Cargomart\Dto\OrderPatchStatus
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param \MagDv\Cargomart\Dto\OrderPatchStatus $status_id status_id
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
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Причина отклонения/отмены запроса на изменение заказа
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets comment_for_consignor
     *
     * @return string|null
     */
    public function getCommentForConsignor()
    {
        return $this->container['comment_for_consignor'];
    }

    /**
     * Sets comment_for_consignor
     *
     * @param string|null $comment_for_consignor Комментарий для заказчика
     *
     * @return self
     */
    public function setCommentForConsignor($comment_for_consignor)
    {
        if (is_null($comment_for_consignor)) {
            throw new \InvalidArgumentException('non-nullable comment_for_consignor cannot be null');
        }
        $this->container['comment_for_consignor'] = $comment_for_consignor;

        return $this;
    }

    /**
     * Gets comment_for_carrier
     *
     * @return string|null
     */
    public function getCommentForCarrier()
    {
        return $this->container['comment_for_carrier'];
    }

    /**
     * Sets comment_for_carrier
     *
     * @param string|null $comment_for_carrier Комментарий для перевозчика
     *
     * @return self
     */
    public function setCommentForCarrier($comment_for_carrier)
    {
        if (is_null($comment_for_carrier)) {
            throw new \InvalidArgumentException('non-nullable comment_for_carrier cannot be null');
        }
        $this->container['comment_for_carrier'] = $comment_for_carrier;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime|null $create_date Дата создания запроса на изменение заказа
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
     * @param int|null $creator_id Создатель запроса на изменение заказа
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
     * Gets update_date
     *
     * @return \DateTime|null
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime|null $update_date Дата изменения запроса на изменение заказа
     *
     * @return self
     */
    public function setUpdateDate($update_date)
    {
        if (is_null($update_date)) {
            throw new \InvalidArgumentException('non-nullable update_date cannot be null');
        }
        $this->container['update_date'] = $update_date;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\OrderPatchAccess|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\OrderPatchAccess|null $access Описание доступных действий по объекту заявка на изменение.
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


