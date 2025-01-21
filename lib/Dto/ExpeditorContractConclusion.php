<?php
/**
 * ExpeditorContractConclusion
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
 * ExpeditorContractConclusion Class Doc Comment
 *
 * @category Class
 * @description Объект состояния заключения договора
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExpeditorContractConclusion implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpeditorContractConclusion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionStatus',
        'kontur_data' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionKonturData',
        'contract_info' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionContractInfo',
        'signer' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionSigner',
        'issue_certificate' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificate',
        'contract' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionContract',
        'signing_method' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionSigningMethod',
        'signing_edm_name' => 'string',
        'contract_send_date' => '\DateTime',
        'refuse_message' => 'string',
        'history' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionHistory',
        'create_date' => '\DateTime',
        'creator_name' => 'string',
        'corsa_document_url' => 'string',
        'contract_template_url' => 'string',
        'creator_id' => 'int',
        'comment' => 'string',
        'access' => '\MagDv\Cargomart\Dto\ExpeditorContractConclusionAccess',
        'commercial_conditions' => '\MagDv\Cargomart\Dto\ExpeditorContractUpdatesCommercialCondition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'kontur_data' => null,
        'contract_info' => null,
        'signer' => null,
        'issue_certificate' => null,
        'contract' => null,
        'signing_method' => null,
        'signing_edm_name' => null,
        'contract_send_date' => 'date-time',
        'refuse_message' => null,
        'history' => null,
        'create_date' => 'date-time',
        'creator_name' => null,
        'corsa_document_url' => 'uri',
        'contract_template_url' => 'uri',
        'creator_id' => null,
        'comment' => null,
        'access' => null,
        'commercial_conditions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'kontur_data' => false,
        'contract_info' => false,
        'signer' => false,
        'issue_certificate' => false,
        'contract' => false,
        'signing_method' => false,
        'signing_edm_name' => false,
        'contract_send_date' => false,
        'refuse_message' => false,
        'history' => false,
        'create_date' => false,
        'creator_name' => false,
        'corsa_document_url' => false,
        'contract_template_url' => false,
        'creator_id' => false,
        'comment' => false,
        'access' => false,
        'commercial_conditions' => false
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
        'status' => 'status',
        'kontur_data' => 'konturData',
        'contract_info' => 'contractInfo',
        'signer' => 'signer',
        'issue_certificate' => 'issueCertificate',
        'contract' => 'contract',
        'signing_method' => 'signingMethod',
        'signing_edm_name' => 'signingEdmName',
        'contract_send_date' => 'contractSendDate',
        'refuse_message' => 'refuseMessage',
        'history' => 'history',
        'create_date' => 'createDate',
        'creator_name' => 'creatorName',
        'corsa_document_url' => 'corsaDocumentUrl',
        'contract_template_url' => 'contractTemplateUrl',
        'creator_id' => 'creatorId',
        'comment' => 'comment',
        'access' => 'access',
        'commercial_conditions' => 'commercialConditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'kontur_data' => 'setKonturData',
        'contract_info' => 'setContractInfo',
        'signer' => 'setSigner',
        'issue_certificate' => 'setIssueCertificate',
        'contract' => 'setContract',
        'signing_method' => 'setSigningMethod',
        'signing_edm_name' => 'setSigningEdmName',
        'contract_send_date' => 'setContractSendDate',
        'refuse_message' => 'setRefuseMessage',
        'history' => 'setHistory',
        'create_date' => 'setCreateDate',
        'creator_name' => 'setCreatorName',
        'corsa_document_url' => 'setCorsaDocumentUrl',
        'contract_template_url' => 'setContractTemplateUrl',
        'creator_id' => 'setCreatorId',
        'comment' => 'setComment',
        'access' => 'setAccess',
        'commercial_conditions' => 'setCommercialConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'kontur_data' => 'getKonturData',
        'contract_info' => 'getContractInfo',
        'signer' => 'getSigner',
        'issue_certificate' => 'getIssueCertificate',
        'contract' => 'getContract',
        'signing_method' => 'getSigningMethod',
        'signing_edm_name' => 'getSigningEdmName',
        'contract_send_date' => 'getContractSendDate',
        'refuse_message' => 'getRefuseMessage',
        'history' => 'getHistory',
        'create_date' => 'getCreateDate',
        'creator_name' => 'getCreatorName',
        'corsa_document_url' => 'getCorsaDocumentUrl',
        'contract_template_url' => 'getContractTemplateUrl',
        'creator_id' => 'getCreatorId',
        'comment' => 'getComment',
        'access' => 'getAccess',
        'commercial_conditions' => 'getCommercialConditions'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('kontur_data', $data ?? [], null);
        $this->setIfExists('contract_info', $data ?? [], null);
        $this->setIfExists('signer', $data ?? [], null);
        $this->setIfExists('issue_certificate', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('signing_method', $data ?? [], null);
        $this->setIfExists('signing_edm_name', $data ?? [], null);
        $this->setIfExists('contract_send_date', $data ?? [], null);
        $this->setIfExists('refuse_message', $data ?? [], null);
        $this->setIfExists('history', $data ?? [], null);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('creator_name', $data ?? [], null);
        $this->setIfExists('corsa_document_url', $data ?? [], null);
        $this->setIfExists('contract_template_url', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('access', $data ?? [], null);
        $this->setIfExists('commercial_conditions', $data ?? [], null);
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets status
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets kontur_data
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionKonturData|null
     */
    public function getKonturData()
    {
        return $this->container['kontur_data'];
    }

    /**
     * Sets kontur_data
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionKonturData|null $kontur_data kontur_data
     *
     * @return self
     */
    public function setKonturData($kontur_data)
    {
        if (is_null($kontur_data)) {
            throw new \InvalidArgumentException('non-nullable kontur_data cannot be null');
        }
        $this->container['kontur_data'] = $kontur_data;

        return $this;
    }

    /**
     * Gets contract_info
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionContractInfo|null
     */
    public function getContractInfo()
    {
        return $this->container['contract_info'];
    }

    /**
     * Sets contract_info
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionContractInfo|null $contract_info contract_info
     *
     * @return self
     */
    public function setContractInfo($contract_info)
    {
        if (is_null($contract_info)) {
            throw new \InvalidArgumentException('non-nullable contract_info cannot be null');
        }
        $this->container['contract_info'] = $contract_info;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionSigner|null
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionSigner|null $signer signer
     *
     * @return self
     */
    public function setSigner($signer)
    {
        if (is_null($signer)) {
            throw new \InvalidArgumentException('non-nullable signer cannot be null');
        }
        $this->container['signer'] = $signer;

        return $this;
    }

    /**
     * Gets issue_certificate
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificate|null
     */
    public function getIssueCertificate()
    {
        return $this->container['issue_certificate'];
    }

    /**
     * Sets issue_certificate
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionIssueCertificate|null $issue_certificate issue_certificate
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
     * Gets contract
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionContract|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionContract|null $contract contract
     *
     * @return self
     */
    public function setContract($contract)
    {
        if (is_null($contract)) {
            throw new \InvalidArgumentException('non-nullable contract cannot be null');
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets signing_method
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionSigningMethod|null
     */
    public function getSigningMethod()
    {
        return $this->container['signing_method'];
    }

    /**
     * Sets signing_method
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionSigningMethod|null $signing_method signing_method
     *
     * @return self
     */
    public function setSigningMethod($signing_method)
    {
        if (is_null($signing_method)) {
            throw new \InvalidArgumentException('non-nullable signing_method cannot be null');
        }
        $this->container['signing_method'] = $signing_method;

        return $this;
    }

    /**
     * Gets signing_edm_name
     *
     * @return string|null
     */
    public function getSigningEdmName()
    {
        return $this->container['signing_edm_name'];
    }

    /**
     * Sets signing_edm_name
     *
     * @param string|null $signing_edm_name Название ЭДО системы
     *
     * @return self
     */
    public function setSigningEdmName($signing_edm_name)
    {
        if (is_null($signing_edm_name)) {
            throw new \InvalidArgumentException('non-nullable signing_edm_name cannot be null');
        }
        $this->container['signing_edm_name'] = $signing_edm_name;

        return $this;
    }

    /**
     * Gets contract_send_date
     *
     * @return \DateTime|null
     */
    public function getContractSendDate()
    {
        return $this->container['contract_send_date'];
    }

    /**
     * Sets contract_send_date
     *
     * @param \DateTime|null $contract_send_date Дата отправки договора в ЭДО контрагента
     *
     * @return self
     */
    public function setContractSendDate($contract_send_date)
    {
        if (is_null($contract_send_date)) {
            throw new \InvalidArgumentException('non-nullable contract_send_date cannot be null');
        }
        $this->container['contract_send_date'] = $contract_send_date;

        return $this;
    }

    /**
     * Gets refuse_message
     *
     * @return string|null
     */
    public function getRefuseMessage()
    {
        return $this->container['refuse_message'];
    }

    /**
     * Sets refuse_message
     *
     * @param string|null $refuse_message Комментарий по отказу от подписи договора
     *
     * @return self
     */
    public function setRefuseMessage($refuse_message)
    {
        if (is_null($refuse_message)) {
            throw new \InvalidArgumentException('non-nullable refuse_message cannot be null');
        }
        $this->container['refuse_message'] = $refuse_message;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionHistory|null
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionHistory|null $history history
     *
     * @return self
     */
    public function setHistory($history)
    {
        if (is_null($history)) {
            throw new \InvalidArgumentException('non-nullable history cannot be null');
        }
        $this->container['history'] = $history;

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
     * @param \DateTime|null $create_date Дата создания
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
     * Gets creator_name
     *
     * @return string|null
     */
    public function getCreatorName()
    {
        return $this->container['creator_name'];
    }

    /**
     * Sets creator_name
     *
     * @param string|null $creator_name Имя автора
     *
     * @return self
     */
    public function setCreatorName($creator_name)
    {
        if (is_null($creator_name)) {
            throw new \InvalidArgumentException('non-nullable creator_name cannot be null');
        }
        $this->container['creator_name'] = $creator_name;

        return $this;
    }

    /**
     * Gets corsa_document_url
     *
     * @return string|null
     */
    public function getCorsaDocumentUrl()
    {
        return $this->container['corsa_document_url'];
    }

    /**
     * Sets corsa_document_url
     *
     * @param string|null $corsa_document_url Ссылка на уставные документы
     *
     * @return self
     */
    public function setCorsaDocumentUrl($corsa_document_url)
    {
        if (is_null($corsa_document_url)) {
            throw new \InvalidArgumentException('non-nullable corsa_document_url cannot be null');
        }
        $this->container['corsa_document_url'] = $corsa_document_url;

        return $this;
    }

    /**
     * Gets contract_template_url
     *
     * @return string|null
     */
    public function getContractTemplateUrl()
    {
        return $this->container['contract_template_url'];
    }

    /**
     * Sets contract_template_url
     *
     * @param string|null $contract_template_url Ссылка на шаблон договора
     *
     * @return self
     */
    public function setContractTemplateUrl($contract_template_url)
    {
        if (is_null($contract_template_url)) {
            throw new \InvalidArgumentException('non-nullable contract_template_url cannot be null');
        }
        $this->container['contract_template_url'] = $contract_template_url;

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
     * @param int|null $creator_id ID автора
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Комментарий
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets access
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractConclusionAccess|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractConclusionAccess|null $access access
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
     * Gets commercial_conditions
     *
     * @return \MagDv\Cargomart\Dto\ExpeditorContractUpdatesCommercialCondition[]|null
     */
    public function getCommercialConditions()
    {
        return $this->container['commercial_conditions'];
    }

    /**
     * Sets commercial_conditions
     *
     * @param \MagDv\Cargomart\Dto\ExpeditorContractUpdatesCommercialCondition[]|null $commercial_conditions Коммерческие условия
     *
     * @return self
     */
    public function setCommercialConditions($commercial_conditions)
    {
        if (is_null($commercial_conditions)) {
            throw new \InvalidArgumentException('non-nullable commercial_conditions cannot be null');
        }
        $this->container['commercial_conditions'] = $commercial_conditions;

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


