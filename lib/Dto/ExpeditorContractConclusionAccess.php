<?php
/**
 * ExpeditorContractConclusionAccess
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
 * ExpeditorContractConclusionAccess Class Doc Comment
 *
 * @category Class
 * @description Права доступа к методам работы с заключением договора
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExpeditorContractConclusionAccess implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpeditorContractConclusionAccess';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create' => 'bool',
        'delete' => 'bool',
        'create_status' => 'bool',
        'create_kontur_data_approve' => 'bool',
        'create_contract_info' => 'bool',
        'create_signer' => 'bool',
        'create_issue_certificate' => 'bool',
        'create_issue_certificate_phone' => 'bool',
        'create_issue_certificate_phone_confirm' => 'bool',
        'create_is_signing_method' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'create' => null,
        'delete' => null,
        'create_status' => null,
        'create_kontur_data_approve' => null,
        'create_contract_info' => null,
        'create_signer' => null,
        'create_issue_certificate' => null,
        'create_issue_certificate_phone' => null,
        'create_issue_certificate_phone_confirm' => null,
        'create_is_signing_method' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'create' => false,
        'delete' => false,
        'create_status' => false,
        'create_kontur_data_approve' => false,
        'create_contract_info' => false,
        'create_signer' => false,
        'create_issue_certificate' => false,
        'create_issue_certificate_phone' => false,
        'create_issue_certificate_phone_confirm' => false,
        'create_is_signing_method' => false
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
        'create' => 'create',
        'delete' => 'delete',
        'create_status' => 'createStatus',
        'create_kontur_data_approve' => 'createKonturDataApprove',
        'create_contract_info' => 'createContractInfo',
        'create_signer' => 'createSigner',
        'create_issue_certificate' => 'createIssueCertificate',
        'create_issue_certificate_phone' => 'createIssueCertificatePhone',
        'create_issue_certificate_phone_confirm' => 'createIssueCertificatePhoneConfirm',
        'create_is_signing_method' => 'createIsSigningMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create' => 'setCreate',
        'delete' => 'setDelete',
        'create_status' => 'setCreateStatus',
        'create_kontur_data_approve' => 'setCreateKonturDataApprove',
        'create_contract_info' => 'setCreateContractInfo',
        'create_signer' => 'setCreateSigner',
        'create_issue_certificate' => 'setCreateIssueCertificate',
        'create_issue_certificate_phone' => 'setCreateIssueCertificatePhone',
        'create_issue_certificate_phone_confirm' => 'setCreateIssueCertificatePhoneConfirm',
        'create_is_signing_method' => 'setCreateIsSigningMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create' => 'getCreate',
        'delete' => 'getDelete',
        'create_status' => 'getCreateStatus',
        'create_kontur_data_approve' => 'getCreateKonturDataApprove',
        'create_contract_info' => 'getCreateContractInfo',
        'create_signer' => 'getCreateSigner',
        'create_issue_certificate' => 'getCreateIssueCertificate',
        'create_issue_certificate_phone' => 'getCreateIssueCertificatePhone',
        'create_issue_certificate_phone_confirm' => 'getCreateIssueCertificatePhoneConfirm',
        'create_is_signing_method' => 'getCreateIsSigningMethod'
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
        $this->setIfExists('create', $data ?? [], false);
        $this->setIfExists('delete', $data ?? [], false);
        $this->setIfExists('create_status', $data ?? [], false);
        $this->setIfExists('create_kontur_data_approve', $data ?? [], false);
        $this->setIfExists('create_contract_info', $data ?? [], false);
        $this->setIfExists('create_signer', $data ?? [], false);
        $this->setIfExists('create_issue_certificate', $data ?? [], false);
        $this->setIfExists('create_issue_certificate_phone', $data ?? [], false);
        $this->setIfExists('create_issue_certificate_phone_confirm', $data ?? [], false);
        $this->setIfExists('create_is_signing_method', $data ?? [], false);
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
     * Gets create
     *
     * @return bool|null
     */
    public function getCreate()
    {
        return $this->container['create'];
    }

    /**
     * Sets create
     *
     * @param bool|null $create Возможность заключить договор с Экспедитором
     *
     * @return self
     */
    public function setCreate($create)
    {
        if (is_null($create)) {
            throw new \InvalidArgumentException('non-nullable create cannot be null');
        }
        $this->container['create'] = $create;

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
     * @param bool|null $delete Удаление процесса заключения договора
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
     * Gets create_status
     *
     * @return bool|null
     */
    public function getCreateStatus()
    {
        return $this->container['create_status'];
    }

    /**
     * Sets create_status
     *
     * @param bool|null $create_status Возможность перехода на любой статус заключения договора
     *
     * @return self
     */
    public function setCreateStatus($create_status)
    {
        if (is_null($create_status)) {
            throw new \InvalidArgumentException('non-nullable create_status cannot be null');
        }
        $this->container['create_status'] = $create_status;

        return $this;
    }

    /**
     * Gets create_kontur_data_approve
     *
     * @return bool|null
     */
    public function getCreateKonturDataApprove()
    {
        return $this->container['create_kontur_data_approve'];
    }

    /**
     * Sets create_kontur_data_approve
     *
     * @param bool|null $create_kontur_data_approve Возможность подтверждения достоверности данных полученных из Контура
     *
     * @return self
     */
    public function setCreateKonturDataApprove($create_kontur_data_approve)
    {
        if (is_null($create_kontur_data_approve)) {
            throw new \InvalidArgumentException('non-nullable create_kontur_data_approve cannot be null');
        }
        $this->container['create_kontur_data_approve'] = $create_kontur_data_approve;

        return $this;
    }

    /**
     * Gets create_contract_info
     *
     * @return bool|null
     */
    public function getCreateContractInfo()
    {
        return $this->container['create_contract_info'];
    }

    /**
     * Sets create_contract_info
     *
     * @param bool|null $create_contract_info Возможность отправить данные для шаблона договора
     *
     * @return self
     */
    public function setCreateContractInfo($create_contract_info)
    {
        if (is_null($create_contract_info)) {
            throw new \InvalidArgumentException('non-nullable create_contract_info cannot be null');
        }
        $this->container['create_contract_info'] = $create_contract_info;

        return $this;
    }

    /**
     * Gets create_signer
     *
     * @return bool|null
     */
    public function getCreateSigner()
    {
        return $this->container['create_signer'];
    }

    /**
     * Sets create_signer
     *
     * @param bool|null $create_signer Добавление подписанта договра
     *
     * @return self
     */
    public function setCreateSigner($create_signer)
    {
        if (is_null($create_signer)) {
            throw new \InvalidArgumentException('non-nullable create_signer cannot be null');
        }
        $this->container['create_signer'] = $create_signer;

        return $this;
    }

    /**
     * Gets create_issue_certificate
     *
     * @return bool|null
     */
    public function getCreateIssueCertificate()
    {
        return $this->container['create_issue_certificate'];
    }

    /**
     * Sets create_issue_certificate
     *
     * @param bool|null $create_issue_certificate Добавление данных о ПЭП-админе
     *
     * @return self
     */
    public function setCreateIssueCertificate($create_issue_certificate)
    {
        if (is_null($create_issue_certificate)) {
            throw new \InvalidArgumentException('non-nullable create_issue_certificate cannot be null');
        }
        $this->container['create_issue_certificate'] = $create_issue_certificate;

        return $this;
    }

    /**
     * Gets create_issue_certificate_phone
     *
     * @return bool|null
     */
    public function getCreateIssueCertificatePhone()
    {
        return $this->container['create_issue_certificate_phone'];
    }

    /**
     * Sets create_issue_certificate_phone
     *
     * @param bool|null $create_issue_certificate_phone Добавление данных телефона ПЭП админа
     *
     * @return self
     */
    public function setCreateIssueCertificatePhone($create_issue_certificate_phone)
    {
        if (is_null($create_issue_certificate_phone)) {
            throw new \InvalidArgumentException('non-nullable create_issue_certificate_phone cannot be null');
        }
        $this->container['create_issue_certificate_phone'] = $create_issue_certificate_phone;

        return $this;
    }

    /**
     * Gets create_issue_certificate_phone_confirm
     *
     * @return bool|null
     */
    public function getCreateIssueCertificatePhoneConfirm()
    {
        return $this->container['create_issue_certificate_phone_confirm'];
    }

    /**
     * Sets create_issue_certificate_phone_confirm
     *
     * @param bool|null $create_issue_certificate_phone_confirm Подтвердить телефон ПЭП админа
     *
     * @return self
     */
    public function setCreateIssueCertificatePhoneConfirm($create_issue_certificate_phone_confirm)
    {
        if (is_null($create_issue_certificate_phone_confirm)) {
            throw new \InvalidArgumentException('non-nullable create_issue_certificate_phone_confirm cannot be null');
        }
        $this->container['create_issue_certificate_phone_confirm'] = $create_issue_certificate_phone_confirm;

        return $this;
    }

    /**
     * Gets create_is_signing_method
     *
     * @return bool|null
     */
    public function getCreateIsSigningMethod()
    {
        return $this->container['create_is_signing_method'];
    }

    /**
     * Sets create_is_signing_method
     *
     * @param bool|null $create_is_signing_method Возможность установить способ подписания договора
     *
     * @return self
     */
    public function setCreateIsSigningMethod($create_is_signing_method)
    {
        if (is_null($create_is_signing_method)) {
            throw new \InvalidArgumentException('non-nullable create_is_signing_method cannot be null');
        }
        $this->container['create_is_signing_method'] = $create_is_signing_method;

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


