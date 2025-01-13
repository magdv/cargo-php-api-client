<?php
/**
 * Worker
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
 * Worker Class Doc Comment
 *
 * @category Class
 * @description Сотрудник
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Worker implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'worker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'last_name' => 'string',
        'first_name' => 'string',
        'second_name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'contact_phone' => 'string',
        'contact_phone_ext' => 'string',
        'contact_email' => 'string',
        'contact_email_status' => '\MagDv\Cargomart\Dto\UserContactEmailStatusEnum',
        'position' => 'string',
        'role_id' => '\MagDv\Cargomart\Dto\UserRoleEnum',
        'is_blocked' => 'bool',
        'timezone' => 'string',
        'invite_status' => '\MagDv\Cargomart\Dto\WorkerInviteStatusEnum',
        'issue_certificate' => '\MagDv\Cargomart\Dto\IssueCertificate',
        'simple_signature_phone_verification' => '\MagDv\Cargomart\Dto\ValueWithCodeVerification',
        'certificate' => '\MagDv\Cargomart\Dto\UserCertificateShort[]',
        'invite_expire_date' => '\DateTime',
        'locked_profile' => 'bool',
        'access' => '\MagDv\Cargomart\Dto\WorkerAccess'
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
        'last_name' => null,
        'first_name' => null,
        'second_name' => null,
        'email' => 'email',
        'phone' => null,
        'contact_phone' => null,
        'contact_phone_ext' => null,
        'contact_email' => null,
        'contact_email_status' => null,
        'position' => null,
        'role_id' => null,
        'is_blocked' => null,
        'timezone' => null,
        'invite_status' => null,
        'issue_certificate' => null,
        'simple_signature_phone_verification' => null,
        'certificate' => null,
        'invite_expire_date' => 'date-time',
        'locked_profile' => null,
        'access' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'last_name' => false,
        'first_name' => false,
        'second_name' => false,
        'email' => false,
        'phone' => false,
        'contact_phone' => false,
        'contact_phone_ext' => false,
        'contact_email' => false,
        'contact_email_status' => false,
        'position' => false,
        'role_id' => false,
        'is_blocked' => false,
        'timezone' => false,
        'invite_status' => false,
        'issue_certificate' => false,
        'simple_signature_phone_verification' => false,
        'certificate' => false,
        'invite_expire_date' => false,
        'locked_profile' => false,
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
        'last_name' => 'lastName',
        'first_name' => 'firstName',
        'second_name' => 'secondName',
        'email' => 'email',
        'phone' => 'phone',
        'contact_phone' => 'contactPhone',
        'contact_phone_ext' => 'contactPhoneExt',
        'contact_email' => 'contactEmail',
        'contact_email_status' => 'contactEmailStatus',
        'position' => 'position',
        'role_id' => 'roleId',
        'is_blocked' => 'isBlocked',
        'timezone' => 'timezone',
        'invite_status' => 'inviteStatus',
        'issue_certificate' => 'issueCertificate',
        'simple_signature_phone_verification' => 'simpleSignaturePhoneVerification',
        'certificate' => 'certificate',
        'invite_expire_date' => 'inviteExpireDate',
        'locked_profile' => 'lockedProfile',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'last_name' => 'setLastName',
        'first_name' => 'setFirstName',
        'second_name' => 'setSecondName',
        'email' => 'setEmail',
        'phone' => 'setPhone',
        'contact_phone' => 'setContactPhone',
        'contact_phone_ext' => 'setContactPhoneExt',
        'contact_email' => 'setContactEmail',
        'contact_email_status' => 'setContactEmailStatus',
        'position' => 'setPosition',
        'role_id' => 'setRoleId',
        'is_blocked' => 'setIsBlocked',
        'timezone' => 'setTimezone',
        'invite_status' => 'setInviteStatus',
        'issue_certificate' => 'setIssueCertificate',
        'simple_signature_phone_verification' => 'setSimpleSignaturePhoneVerification',
        'certificate' => 'setCertificate',
        'invite_expire_date' => 'setInviteExpireDate',
        'locked_profile' => 'setLockedProfile',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'last_name' => 'getLastName',
        'first_name' => 'getFirstName',
        'second_name' => 'getSecondName',
        'email' => 'getEmail',
        'phone' => 'getPhone',
        'contact_phone' => 'getContactPhone',
        'contact_phone_ext' => 'getContactPhoneExt',
        'contact_email' => 'getContactEmail',
        'contact_email_status' => 'getContactEmailStatus',
        'position' => 'getPosition',
        'role_id' => 'getRoleId',
        'is_blocked' => 'getIsBlocked',
        'timezone' => 'getTimezone',
        'invite_status' => 'getInviteStatus',
        'issue_certificate' => 'getIssueCertificate',
        'simple_signature_phone_verification' => 'getSimpleSignaturePhoneVerification',
        'certificate' => 'getCertificate',
        'invite_expire_date' => 'getInviteExpireDate',
        'locked_profile' => 'getLockedProfile',
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
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('second_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('contact_phone', $data ?? [], null);
        $this->setIfExists('contact_phone_ext', $data ?? [], null);
        $this->setIfExists('contact_email', $data ?? [], null);
        $this->setIfExists('contact_email_status', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('role_id', $data ?? [], null);
        $this->setIfExists('is_blocked', $data ?? [], false);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('invite_status', $data ?? [], null);
        $this->setIfExists('issue_certificate', $data ?? [], null);
        $this->setIfExists('simple_signature_phone_verification', $data ?? [], null);
        $this->setIfExists('certificate', $data ?? [], null);
        $this->setIfExists('invite_expire_date', $data ?? [], null);
        $this->setIfExists('locked_profile', $data ?? [], false);
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
        if ($this->container['role_id'] === null) {
            $invalidProperties[] = "'role_id' can't be null";
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
     * @param int $id Идентификатор
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
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Фамилия
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name Имя
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets second_name
     *
     * @return string|null
     */
    public function getSecondName()
    {
        return $this->container['second_name'];
    }

    /**
     * Sets second_name
     *
     * @param string|null $second_name Отчество
     *
     * @return self
     */
    public function setSecondName($second_name)
    {
        if (is_null($second_name)) {
            throw new \InvalidArgumentException('non-nullable second_name cannot be null');
        }
        $this->container['second_name'] = $second_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Электронная почта
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

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
     * @param string|null $phone Телефон
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
     * Gets contact_phone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string|null $contact_phone Контактный телефон
     *
     * @return self
     */
    public function setContactPhone($contact_phone)
    {
        if (is_null($contact_phone)) {
            throw new \InvalidArgumentException('non-nullable contact_phone cannot be null');
        }
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets contact_phone_ext
     *
     * @return string|null
     */
    public function getContactPhoneExt()
    {
        return $this->container['contact_phone_ext'];
    }

    /**
     * Sets contact_phone_ext
     *
     * @param string|null $contact_phone_ext Контактный телефон (добавочный номер)
     *
     * @return self
     */
    public function setContactPhoneExt($contact_phone_ext)
    {
        if (is_null($contact_phone_ext)) {
            throw new \InvalidArgumentException('non-nullable contact_phone_ext cannot be null');
        }
        $this->container['contact_phone_ext'] = $contact_phone_ext;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email Контактный Email пользователя
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        if (is_null($contact_email)) {
            throw new \InvalidArgumentException('non-nullable contact_email cannot be null');
        }
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_email_status
     *
     * @return \MagDv\Cargomart\Dto\UserContactEmailStatusEnum|null
     */
    public function getContactEmailStatus()
    {
        return $this->container['contact_email_status'];
    }

    /**
     * Sets contact_email_status
     *
     * @param \MagDv\Cargomart\Dto\UserContactEmailStatusEnum|null $contact_email_status Статус контактного Email
     *
     * @return self
     */
    public function setContactEmailStatus($contact_email_status)
    {
        if (is_null($contact_email_status)) {
            throw new \InvalidArgumentException('non-nullable contact_email_status cannot be null');
        }
        $this->container['contact_email_status'] = $contact_email_status;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position Должность
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets role_id
     *
     * @return \MagDv\Cargomart\Dto\UserRoleEnum
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     *
     * @param \MagDv\Cargomart\Dto\UserRoleEnum $role_id Роль сотрудника в компании
     *
     * @return self
     */
    public function setRoleId($role_id)
    {
        if (is_null($role_id)) {
            throw new \InvalidArgumentException('non-nullable role_id cannot be null');
        }
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets is_blocked
     *
     * @return bool|null
     */
    public function getIsBlocked()
    {
        return $this->container['is_blocked'];
    }

    /**
     * Sets is_blocked
     *
     * @param bool|null $is_blocked Заблокирован пользователь
     *
     * @return self
     */
    public function setIsBlocked($is_blocked)
    {
        if (is_null($is_blocked)) {
            throw new \InvalidArgumentException('non-nullable is_blocked cannot be null');
        }
        $this->container['is_blocked'] = $is_blocked;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone Часовой пояс
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets invite_status
     *
     * @return \MagDv\Cargomart\Dto\WorkerInviteStatusEnum|null
     */
    public function getInviteStatus()
    {
        return $this->container['invite_status'];
    }

    /**
     * Sets invite_status
     *
     * @param \MagDv\Cargomart\Dto\WorkerInviteStatusEnum|null $invite_status invite_status
     *
     * @return self
     */
    public function setInviteStatus($invite_status)
    {
        if (is_null($invite_status)) {
            throw new \InvalidArgumentException('non-nullable invite_status cannot be null');
        }
        $this->container['invite_status'] = $invite_status;

        return $this;
    }

    /**
     * Gets issue_certificate
     *
     * @return \MagDv\Cargomart\Dto\IssueCertificate|null
     */
    public function getIssueCertificate()
    {
        return $this->container['issue_certificate'];
    }

    /**
     * Sets issue_certificate
     *
     * @param \MagDv\Cargomart\Dto\IssueCertificate|null $issue_certificate issue_certificate
     *
     * @return self
     */
    public function setIssueCertificate($issue_certificate)
    {
        if (is_null($issue_certificate)) {
            throw new \InvalidArgumentException('non-nullable issue_certificate cannot be null');
        }
        $this->container['issue_certificate'] = $issue_certificate;

        return $this;
    }

    /**
     * Gets simple_signature_phone_verification
     *
     * @return \MagDv\Cargomart\Dto\ValueWithCodeVerification|null
     */
    public function getSimpleSignaturePhoneVerification()
    {
        return $this->container['simple_signature_phone_verification'];
    }

    /**
     * Sets simple_signature_phone_verification
     *
     * @param \MagDv\Cargomart\Dto\ValueWithCodeVerification|null $simple_signature_phone_verification simple_signature_phone_verification
     *
     * @return self
     */
    public function setSimpleSignaturePhoneVerification($simple_signature_phone_verification)
    {
        if (is_null($simple_signature_phone_verification)) {
            throw new \InvalidArgumentException('non-nullable simple_signature_phone_verification cannot be null');
        }
        $this->container['simple_signature_phone_verification'] = $simple_signature_phone_verification;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return \MagDv\Cargomart\Dto\UserCertificateShort[]|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param \MagDv\Cargomart\Dto\UserCertificateShort[]|null $certificate Список информации по сертификату
     *
     * @return self
     */
    public function setCertificate($certificate)
    {
        if (is_null($certificate)) {
            throw new \InvalidArgumentException('non-nullable certificate cannot be null');
        }
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets invite_expire_date
     *
     * @return \DateTime|null
     */
    public function getInviteExpireDate()
    {
        return $this->container['invite_expire_date'];
    }

    /**
     * Sets invite_expire_date
     *
     * @param \DateTime|null $invite_expire_date Срок действия приглашения в сотрудники
     *
     * @return self
     */
    public function setInviteExpireDate($invite_expire_date)
    {
        if (is_null($invite_expire_date)) {
            throw new \InvalidArgumentException('non-nullable invite_expire_date cannot be null');
        }
        $this->container['invite_expire_date'] = $invite_expire_date;

        return $this;
    }

    /**
     * Gets locked_profile
     *
     * @return bool|null
     */
    public function getLockedProfile()
    {
        return $this->container['locked_profile'];
    }

    /**
     * Sets locked_profile
     *
     * @param bool|null $locked_profile Заблокирована ли возможность редактирования пользовательских данных
     *
     * @return self
     */
    public function setLockedProfile($locked_profile)
    {
        if (is_null($locked_profile)) {
            throw new \InvalidArgumentException('non-nullable locked_profile cannot be null');
        }
        $this->container['locked_profile'] = $locked_profile;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\WorkerAccess|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\WorkerAccess|null $access Объект доступа
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


