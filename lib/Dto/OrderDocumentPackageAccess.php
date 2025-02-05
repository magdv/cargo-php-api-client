<?php
/**
 * OrderDocumentPackageAccess
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
 * OrderDocumentPackageAccess Class Doc Comment
 *
 * @category Class
 * @description Описание доступов к пакету документов заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDocumentPackageAccess implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDocumentPackageAccess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'view' => 'bool',
        'update' => 'bool',
        'create_document' => 'bool',
        'update_show_to_customer' => 'bool',
        'create_moderation' => 'bool',
        'create_accept' => 'bool',
        'create_reject' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'view' => null,
        'update' => null,
        'create_document' => null,
        'update_show_to_customer' => null,
        'create_moderation' => null,
        'create_accept' => null,
        'create_reject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'view' => false,
        'update' => false,
        'create_document' => false,
        'update_show_to_customer' => false,
        'create_moderation' => false,
        'create_accept' => false,
        'create_reject' => false
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
        'view' => 'view',
        'update' => 'update',
        'create_document' => 'createDocument',
        'update_show_to_customer' => 'updateShowToCustomer',
        'create_moderation' => 'createModeration',
        'create_accept' => 'createAccept',
        'create_reject' => 'createReject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'view' => 'setView',
        'update' => 'setUpdate',
        'create_document' => 'setCreateDocument',
        'update_show_to_customer' => 'setUpdateShowToCustomer',
        'create_moderation' => 'setCreateModeration',
        'create_accept' => 'setCreateAccept',
        'create_reject' => 'setCreateReject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'view' => 'getView',
        'update' => 'getUpdate',
        'create_document' => 'getCreateDocument',
        'update_show_to_customer' => 'getUpdateShowToCustomer',
        'create_moderation' => 'getCreateModeration',
        'create_accept' => 'getCreateAccept',
        'create_reject' => 'getCreateReject'
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
        $this->setIfExists('view', $data ?? [], false);
        $this->setIfExists('update', $data ?? [], false);
        $this->setIfExists('create_document', $data ?? [], false);
        $this->setIfExists('update_show_to_customer', $data ?? [], false);
        $this->setIfExists('create_moderation', $data ?? [], false);
        $this->setIfExists('create_accept', $data ?? [], false);
        $this->setIfExists('create_reject', $data ?? [], false);
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
     * Gets view
     *
     * @return bool|null
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param bool|null $view Возможность просматривать пакет документов
     *
     * @return self
     */
    public function setView($view)
    {
        if (is_null($view)) {
            throw new \InvalidArgumentException('non-nullable view cannot be null');
        }
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets update
     *
     * @return bool|null
     */
    public function getUpdate()
    {
        return $this->container['update'];
    }

    /**
     * Sets update
     *
     * @param bool|null $update Возможность обновить пакет документов
     *
     * @return self
     */
    public function setUpdate($update)
    {
        if (is_null($update)) {
            throw new \InvalidArgumentException('non-nullable update cannot be null');
        }
        $this->container['update'] = $update;

        return $this;
    }

    /**
     * Gets create_document
     *
     * @return bool|null
     */
    public function getCreateDocument()
    {
        return $this->container['create_document'];
    }

    /**
     * Sets create_document
     *
     * @param bool|null $create_document Возможность добавить документ к пакету документов
     *
     * @return self
     */
    public function setCreateDocument($create_document)
    {
        if (is_null($create_document)) {
            throw new \InvalidArgumentException('non-nullable create_document cannot be null');
        }
        $this->container['create_document'] = $create_document;

        return $this;
    }

    /**
     * Gets update_show_to_customer
     *
     * @return bool|null
     */
    public function getUpdateShowToCustomer()
    {
        return $this->container['update_show_to_customer'];
    }

    /**
     * Sets update_show_to_customer
     *
     * @param bool|null $update_show_to_customer Возможность устанавливать видимость документов заказчику
     *
     * @return self
     */
    public function setUpdateShowToCustomer($update_show_to_customer)
    {
        if (is_null($update_show_to_customer)) {
            throw new \InvalidArgumentException('non-nullable update_show_to_customer cannot be null');
        }
        $this->container['update_show_to_customer'] = $update_show_to_customer;

        return $this;
    }

    /**
     * Gets create_moderation
     *
     * @return bool|null
     */
    public function getCreateModeration()
    {
        return $this->container['create_moderation'];
    }

    /**
     * Sets create_moderation
     *
     * @param bool|null $create_moderation Возможность отправить на проверку пакет документов
     *
     * @return self
     */
    public function setCreateModeration($create_moderation)
    {
        if (is_null($create_moderation)) {
            throw new \InvalidArgumentException('non-nullable create_moderation cannot be null');
        }
        $this->container['create_moderation'] = $create_moderation;

        return $this;
    }

    /**
     * Gets create_accept
     *
     * @return bool|null
     */
    public function getCreateAccept()
    {
        return $this->container['create_accept'];
    }

    /**
     * Sets create_accept
     *
     * @param bool|null $create_accept Возможность принять пакет документов
     *
     * @return self
     */
    public function setCreateAccept($create_accept)
    {
        if (is_null($create_accept)) {
            throw new \InvalidArgumentException('non-nullable create_accept cannot be null');
        }
        $this->container['create_accept'] = $create_accept;

        return $this;
    }

    /**
     * Gets create_reject
     *
     * @return bool|null
     */
    public function getCreateReject()
    {
        return $this->container['create_reject'];
    }

    /**
     * Sets create_reject
     *
     * @param bool|null $create_reject Возможность отклонить пакет
     *
     * @return self
     */
    public function setCreateReject($create_reject)
    {
        if (is_null($create_reject)) {
            throw new \InvalidArgumentException('non-nullable create_reject cannot be null');
        }
        $this->container['create_reject'] = $create_reject;

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


