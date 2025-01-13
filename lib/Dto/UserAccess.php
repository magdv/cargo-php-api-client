<?php
/**
 * UserAccess
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
 * UserAccess Class Doc Comment
 *
 * @category Class
 * @description Массив разрешений
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserAccess implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'user-access';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'update' => 'bool',
        'delete' => 'bool',
        'phone_change' => 'bool',
        'email_change' => 'bool',
        'phone_change_cancel' => 'bool',
        'email_change_cancel' => 'bool',
        'create_contact_email' => 'bool',
        'delete_contact_email' => 'bool',
        'create_confirm_contact_email' => 'bool',
        'create_resend_contact_email' => 'bool',
        'sms_code_confirm' => 'bool',
        'email_code_confirm' => 'bool',
        'sms_code_resend' => 'bool',
        'sms_code_send' => 'bool',
        'email_code_send' => 'bool',
        'password_change' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'update' => null,
        'delete' => null,
        'phone_change' => null,
        'email_change' => null,
        'phone_change_cancel' => null,
        'email_change_cancel' => null,
        'create_contact_email' => null,
        'delete_contact_email' => null,
        'create_confirm_contact_email' => null,
        'create_resend_contact_email' => null,
        'sms_code_confirm' => null,
        'email_code_confirm' => null,
        'sms_code_resend' => null,
        'sms_code_send' => null,
        'email_code_send' => null,
        'password_change' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'update' => false,
        'delete' => false,
        'phone_change' => false,
        'email_change' => false,
        'phone_change_cancel' => false,
        'email_change_cancel' => false,
        'create_contact_email' => false,
        'delete_contact_email' => false,
        'create_confirm_contact_email' => false,
        'create_resend_contact_email' => false,
        'sms_code_confirm' => false,
        'email_code_confirm' => false,
        'sms_code_resend' => false,
        'sms_code_send' => false,
        'email_code_send' => false,
        'password_change' => false
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
        'update' => 'update',
        'delete' => 'delete',
        'phone_change' => 'phoneChange',
        'email_change' => 'emailChange',
        'phone_change_cancel' => 'phoneChangeCancel',
        'email_change_cancel' => 'emailChangeCancel',
        'create_contact_email' => 'createContactEmail',
        'delete_contact_email' => 'deleteContactEmail',
        'create_confirm_contact_email' => 'createConfirmContactEmail',
        'create_resend_contact_email' => 'createResendContactEmail',
        'sms_code_confirm' => 'smsCodeConfirm',
        'email_code_confirm' => 'emailCodeConfirm',
        'sms_code_resend' => 'smsCodeResend',
        'sms_code_send' => 'smsCodeSend',
        'email_code_send' => 'emailCodeSend',
        'password_change' => 'passwordChange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'update' => 'setUpdate',
        'delete' => 'setDelete',
        'phone_change' => 'setPhoneChange',
        'email_change' => 'setEmailChange',
        'phone_change_cancel' => 'setPhoneChangeCancel',
        'email_change_cancel' => 'setEmailChangeCancel',
        'create_contact_email' => 'setCreateContactEmail',
        'delete_contact_email' => 'setDeleteContactEmail',
        'create_confirm_contact_email' => 'setCreateConfirmContactEmail',
        'create_resend_contact_email' => 'setCreateResendContactEmail',
        'sms_code_confirm' => 'setSmsCodeConfirm',
        'email_code_confirm' => 'setEmailCodeConfirm',
        'sms_code_resend' => 'setSmsCodeResend',
        'sms_code_send' => 'setSmsCodeSend',
        'email_code_send' => 'setEmailCodeSend',
        'password_change' => 'setPasswordChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'update' => 'getUpdate',
        'delete' => 'getDelete',
        'phone_change' => 'getPhoneChange',
        'email_change' => 'getEmailChange',
        'phone_change_cancel' => 'getPhoneChangeCancel',
        'email_change_cancel' => 'getEmailChangeCancel',
        'create_contact_email' => 'getCreateContactEmail',
        'delete_contact_email' => 'getDeleteContactEmail',
        'create_confirm_contact_email' => 'getCreateConfirmContactEmail',
        'create_resend_contact_email' => 'getCreateResendContactEmail',
        'sms_code_confirm' => 'getSmsCodeConfirm',
        'email_code_confirm' => 'getEmailCodeConfirm',
        'sms_code_resend' => 'getSmsCodeResend',
        'sms_code_send' => 'getSmsCodeSend',
        'email_code_send' => 'getEmailCodeSend',
        'password_change' => 'getPasswordChange'
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
        $this->setIfExists('update', $data ?? [], false);
        $this->setIfExists('delete', $data ?? [], false);
        $this->setIfExists('phone_change', $data ?? [], false);
        $this->setIfExists('email_change', $data ?? [], false);
        $this->setIfExists('phone_change_cancel', $data ?? [], false);
        $this->setIfExists('email_change_cancel', $data ?? [], false);
        $this->setIfExists('create_contact_email', $data ?? [], false);
        $this->setIfExists('delete_contact_email', $data ?? [], false);
        $this->setIfExists('create_confirm_contact_email', $data ?? [], false);
        $this->setIfExists('create_resend_contact_email', $data ?? [], false);
        $this->setIfExists('sms_code_confirm', $data ?? [], false);
        $this->setIfExists('email_code_confirm', $data ?? [], false);
        $this->setIfExists('sms_code_resend', $data ?? [], false);
        $this->setIfExists('sms_code_send', $data ?? [], false);
        $this->setIfExists('email_code_send', $data ?? [], false);
        $this->setIfExists('password_change', $data ?? [], false);
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
     * @param bool|null $update Можно ли редактировать пользователю себя
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
     * @param bool|null $delete Можно удалить свою учетную запись.
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
     * Gets phone_change
     *
     * @return bool|null
     */
    public function getPhoneChange()
    {
        return $this->container['phone_change'];
    }

    /**
     * Sets phone_change
     *
     * @param bool|null $phone_change Можно ли пользователю изменить телефон
     *
     * @return self
     */
    public function setPhoneChange($phone_change)
    {
        if (is_null($phone_change)) {
            throw new \InvalidArgumentException('non-nullable phone_change cannot be null');
        }
        $this->container['phone_change'] = $phone_change;

        return $this;
    }

    /**
     * Gets email_change
     *
     * @return bool|null
     */
    public function getEmailChange()
    {
        return $this->container['email_change'];
    }

    /**
     * Sets email_change
     *
     * @param bool|null $email_change Можно ли пользователю изменить email
     *
     * @return self
     */
    public function setEmailChange($email_change)
    {
        if (is_null($email_change)) {
            throw new \InvalidArgumentException('non-nullable email_change cannot be null');
        }
        $this->container['email_change'] = $email_change;

        return $this;
    }

    /**
     * Gets phone_change_cancel
     *
     * @return bool|null
     */
    public function getPhoneChangeCancel()
    {
        return $this->container['phone_change_cancel'];
    }

    /**
     * Sets phone_change_cancel
     *
     * @param bool|null $phone_change_cancel Можно ли пользователю отменить изменение телефона
     *
     * @return self
     */
    public function setPhoneChangeCancel($phone_change_cancel)
    {
        if (is_null($phone_change_cancel)) {
            throw new \InvalidArgumentException('non-nullable phone_change_cancel cannot be null');
        }
        $this->container['phone_change_cancel'] = $phone_change_cancel;

        return $this;
    }

    /**
     * Gets email_change_cancel
     *
     * @return bool|null
     */
    public function getEmailChangeCancel()
    {
        return $this->container['email_change_cancel'];
    }

    /**
     * Sets email_change_cancel
     *
     * @param bool|null $email_change_cancel Можно ли пользователю отменить изменение почты
     *
     * @return self
     */
    public function setEmailChangeCancel($email_change_cancel)
    {
        if (is_null($email_change_cancel)) {
            throw new \InvalidArgumentException('non-nullable email_change_cancel cannot be null');
        }
        $this->container['email_change_cancel'] = $email_change_cancel;

        return $this;
    }

    /**
     * Gets create_contact_email
     *
     * @return bool|null
     */
    public function getCreateContactEmail()
    {
        return $this->container['create_contact_email'];
    }

    /**
     * Sets create_contact_email
     *
     * @param bool|null $create_contact_email Можно ли создать контактный email пользователя
     *
     * @return self
     */
    public function setCreateContactEmail($create_contact_email)
    {
        if (is_null($create_contact_email)) {
            throw new \InvalidArgumentException('non-nullable create_contact_email cannot be null');
        }
        $this->container['create_contact_email'] = $create_contact_email;

        return $this;
    }

    /**
     * Gets delete_contact_email
     *
     * @return bool|null
     */
    public function getDeleteContactEmail()
    {
        return $this->container['delete_contact_email'];
    }

    /**
     * Sets delete_contact_email
     *
     * @param bool|null $delete_contact_email Возможность удалить контактный email
     *
     * @return self
     */
    public function setDeleteContactEmail($delete_contact_email)
    {
        if (is_null($delete_contact_email)) {
            throw new \InvalidArgumentException('non-nullable delete_contact_email cannot be null');
        }
        $this->container['delete_contact_email'] = $delete_contact_email;

        return $this;
    }

    /**
     * Gets create_confirm_contact_email
     *
     * @return bool|null
     */
    public function getCreateConfirmContactEmail()
    {
        return $this->container['create_confirm_contact_email'];
    }

    /**
     * Sets create_confirm_contact_email
     *
     * @param bool|null $create_confirm_contact_email Возможность подтвердить контактный email
     *
     * @return self
     */
    public function setCreateConfirmContactEmail($create_confirm_contact_email)
    {
        if (is_null($create_confirm_contact_email)) {
            throw new \InvalidArgumentException('non-nullable create_confirm_contact_email cannot be null');
        }
        $this->container['create_confirm_contact_email'] = $create_confirm_contact_email;

        return $this;
    }

    /**
     * Gets create_resend_contact_email
     *
     * @return bool|null
     */
    public function getCreateResendContactEmail()
    {
        return $this->container['create_resend_contact_email'];
    }

    /**
     * Sets create_resend_contact_email
     *
     * @param bool|null $create_resend_contact_email Возможность отправить подтверждающий код для контактный email
     *
     * @return self
     */
    public function setCreateResendContactEmail($create_resend_contact_email)
    {
        if (is_null($create_resend_contact_email)) {
            throw new \InvalidArgumentException('non-nullable create_resend_contact_email cannot be null');
        }
        $this->container['create_resend_contact_email'] = $create_resend_contact_email;

        return $this;
    }

    /**
     * Gets sms_code_confirm
     *
     * @return bool|null
     */
    public function getSmsCodeConfirm()
    {
        return $this->container['sms_code_confirm'];
    }

    /**
     * Sets sms_code_confirm
     *
     * @param bool|null $sms_code_confirm Можно ли пользователю подтверждать смской телефон
     *
     * @return self
     */
    public function setSmsCodeConfirm($sms_code_confirm)
    {
        if (is_null($sms_code_confirm)) {
            throw new \InvalidArgumentException('non-nullable sms_code_confirm cannot be null');
        }
        $this->container['sms_code_confirm'] = $sms_code_confirm;

        return $this;
    }

    /**
     * Gets email_code_confirm
     *
     * @return bool|null
     */
    public function getEmailCodeConfirm()
    {
        return $this->container['email_code_confirm'];
    }

    /**
     * Sets email_code_confirm
     *
     * @param bool|null $email_code_confirm Можно ли пользователю подтверждать email
     *
     * @return self
     */
    public function setEmailCodeConfirm($email_code_confirm)
    {
        if (is_null($email_code_confirm)) {
            throw new \InvalidArgumentException('non-nullable email_code_confirm cannot be null');
        }
        $this->container['email_code_confirm'] = $email_code_confirm;

        return $this;
    }

    /**
     * Gets sms_code_resend
     *
     * @return bool|null
     */
    public function getSmsCodeResend()
    {
        return $this->container['sms_code_resend'];
    }

    /**
     * Sets sms_code_resend
     *
     * @param bool|null $sms_code_resend Можно ли пользователю попросить послать ему смс на телефон(deprecated)
     *
     * @return self
     */
    public function setSmsCodeResend($sms_code_resend)
    {
        if (is_null($sms_code_resend)) {
            throw new \InvalidArgumentException('non-nullable sms_code_resend cannot be null');
        }
        $this->container['sms_code_resend'] = $sms_code_resend;

        return $this;
    }

    /**
     * Gets sms_code_send
     *
     * @return bool|null
     */
    public function getSmsCodeSend()
    {
        return $this->container['sms_code_send'];
    }

    /**
     * Sets sms_code_send
     *
     * @param bool|null $sms_code_send Можно ли пользователю попросить послать ему смс на телефон
     *
     * @return self
     */
    public function setSmsCodeSend($sms_code_send)
    {
        if (is_null($sms_code_send)) {
            throw new \InvalidArgumentException('non-nullable sms_code_send cannot be null');
        }
        $this->container['sms_code_send'] = $sms_code_send;

        return $this;
    }

    /**
     * Gets email_code_send
     *
     * @return bool|null
     */
    public function getEmailCodeSend()
    {
        return $this->container['email_code_send'];
    }

    /**
     * Sets email_code_send
     *
     * @param bool|null $email_code_send Можно ли пользователю попросить послать ему email c кодом проверки
     *
     * @return self
     */
    public function setEmailCodeSend($email_code_send)
    {
        if (is_null($email_code_send)) {
            throw new \InvalidArgumentException('non-nullable email_code_send cannot be null');
        }
        $this->container['email_code_send'] = $email_code_send;

        return $this;
    }

    /**
     * Gets password_change
     *
     * @return bool|null
     */
    public function getPasswordChange()
    {
        return $this->container['password_change'];
    }

    /**
     * Sets password_change
     *
     * @param bool|null $password_change Можно ли пользователю изменить пароль
     *
     * @return self
     */
    public function setPasswordChange($password_change)
    {
        if (is_null($password_change)) {
            throw new \InvalidArgumentException('non-nullable password_change cannot be null');
        }
        $this->container['password_change'] = $password_change;

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

