<?php
/**
 * WorkerAccess
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
 * WorkerAccess Class Doc Comment
 *
 * @category Class
 * @description Список доступа к объекту сотрудника
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkerAccess implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'worker-access';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'view' => 'bool',
        'update' => 'bool',
        'delete' => 'bool',
        'create_resend_invite' => 'bool',
        'view_certificate' => 'bool',
        'create_certificate' => 'bool'
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
        'delete' => null,
        'create_resend_invite' => null,
        'view_certificate' => null,
        'create_certificate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'view' => false,
        'update' => false,
        'delete' => false,
        'create_resend_invite' => false,
        'view_certificate' => false,
        'create_certificate' => false
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
        'delete' => 'delete',
        'create_resend_invite' => 'createResendInvite',
        'view_certificate' => 'viewCertificate',
        'create_certificate' => 'createCertificate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'view' => 'setView',
        'update' => 'setUpdate',
        'delete' => 'setDelete',
        'create_resend_invite' => 'setCreateResendInvite',
        'view_certificate' => 'setViewCertificate',
        'create_certificate' => 'setCreateCertificate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'view' => 'getView',
        'update' => 'getUpdate',
        'delete' => 'getDelete',
        'create_resend_invite' => 'getCreateResendInvite',
        'view_certificate' => 'getViewCertificate',
        'create_certificate' => 'getCreateCertificate'
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
        $this->setIfExists('delete', $data ?? [], false);
        $this->setIfExists('create_resend_invite', $data ?? [], false);
        $this->setIfExists('view_certificate', $data ?? [], false);
        $this->setIfExists('create_certificate', $data ?? [], false);
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
     * @param bool|null $view Возможность детального просмотра данных сотрудника
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
     * @param bool|null $update Возможность редактировать данные сотрудника
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
     * Gets delete
     *
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
     * Sets delete
     *
     * @param bool|null $delete Возможность удалять сотрудника
     *
     * @return self
     */
    public function setDelete($delete)
    {
        if (is_null($delete)) {
            throw new \InvalidArgumentException('non-nullable delete cannot be null');
        }
        $this->container['delete'] = $delete;

        return $this;
    }

    /**
     * Gets create_resend_invite
     *
     * @return bool|null
     */
    public function getCreateResendInvite()
    {
        return $this->container['create_resend_invite'];
    }

    /**
     * Sets create_resend_invite
     *
     * @param bool|null $create_resend_invite Возможность повторно отправить письмо с приглашением в сотрудники
     *
     * @return self
     */
    public function setCreateResendInvite($create_resend_invite)
    {
        if (is_null($create_resend_invite)) {
            throw new \InvalidArgumentException('non-nullable create_resend_invite cannot be null');
        }
        $this->container['create_resend_invite'] = $create_resend_invite;

        return $this;
    }

    /**
     * Gets view_certificate
     *
     * @return bool|null
     */
    public function getViewCertificate()
    {
        return $this->container['view_certificate'];
    }

    /**
     * Sets view_certificate
     *
     * @param bool|null $view_certificate Возможность просмотра списка сертификатов пользователя
     *
     * @return self
     */
    public function setViewCertificate($view_certificate)
    {
        if (is_null($view_certificate)) {
            throw new \InvalidArgumentException('non-nullable view_certificate cannot be null');
        }
        $this->container['view_certificate'] = $view_certificate;

        return $this;
    }

    /**
     * Gets create_certificate
     *
     * @return bool|null
     */
    public function getCreateCertificate()
    {
        return $this->container['create_certificate'];
    }

    /**
     * Sets create_certificate
     *
     * @param bool|null $create_certificate Возможность выдать сертификат
     *
     * @return self
     */
    public function setCreateCertificate($create_certificate)
    {
        if (is_null($create_certificate)) {
            throw new \InvalidArgumentException('non-nullable create_certificate cannot be null');
        }
        $this->container['create_certificate'] = $create_certificate;

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


