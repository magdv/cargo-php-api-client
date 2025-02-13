<?php
/**
 * ClaimDowntimeCreateRequest
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
 * ClaimDowntimeCreateRequest Class Doc Comment
 *
 * @category Class
 * @description Данные для создания (подачи) требования о простое
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClaimDowntimeCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClaimDowntimeCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'points' => 'ClaimDowntimePoint[]',
        'order' => '\MagDv\Cargomart\Dto\ClaimDowntimeOrder',
        'claimant' => '\MagDv\Cargomart\Dto\ClaimParticipant',
        'respondent' => '\MagDv\Cargomart\Dto\ClaimParticipant',
        'vehicle' => '\MagDv\Cargomart\Dto\ClaimDowntimeVehicle',
        'contract' => '\MagDv\Cargomart\Dto\ClaimDowntimeContract',
        'bank_details' => '\MagDv\Cargomart\Dto\ClaimBankDetails',
        'downtime' => '\MagDv\Cargomart\Dto\Downtime',
        'proofs' => '\MagDv\Cargomart\Dto\ClaimProofDocument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'points' => null,
        'order' => null,
        'claimant' => null,
        'respondent' => null,
        'vehicle' => null,
        'contract' => null,
        'bank_details' => null,
        'downtime' => null,
        'proofs' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'points' => false,
        'order' => false,
        'claimant' => false,
        'respondent' => false,
        'vehicle' => false,
        'contract' => false,
        'bank_details' => false,
        'downtime' => false,
        'proofs' => false
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
        'points' => 'points',
        'order' => 'order',
        'claimant' => 'claimant',
        'respondent' => 'respondent',
        'vehicle' => 'vehicle',
        'contract' => 'contract',
        'bank_details' => 'bankDetails',
        'downtime' => 'downtime',
        'proofs' => 'proofs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'points' => 'setPoints',
        'order' => 'setOrder',
        'claimant' => 'setClaimant',
        'respondent' => 'setRespondent',
        'vehicle' => 'setVehicle',
        'contract' => 'setContract',
        'bank_details' => 'setBankDetails',
        'downtime' => 'setDowntime',
        'proofs' => 'setProofs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'points' => 'getPoints',
        'order' => 'getOrder',
        'claimant' => 'getClaimant',
        'respondent' => 'getRespondent',
        'vehicle' => 'getVehicle',
        'contract' => 'getContract',
        'bank_details' => 'getBankDetails',
        'downtime' => 'getDowntime',
        'proofs' => 'getProofs'
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
        $this->setIfExists('points', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('claimant', $data ?? [], null);
        $this->setIfExists('respondent', $data ?? [], null);
        $this->setIfExists('vehicle', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('bank_details', $data ?? [], null);
        $this->setIfExists('downtime', $data ?? [], null);
        $this->setIfExists('proofs', $data ?? [], null);
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

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['claimant'] === null) {
            $invalidProperties[] = "'claimant' can't be null";
        }
        if ($this->container['respondent'] === null) {
            $invalidProperties[] = "'respondent' can't be null";
        }
        if ($this->container['vehicle'] === null) {
            $invalidProperties[] = "'vehicle' can't be null";
        }
        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        if ($this->container['bank_details'] === null) {
            $invalidProperties[] = "'bank_details' can't be null";
        }
        if ($this->container['downtime'] === null) {
            $invalidProperties[] = "'downtime' can't be null";
        }
        if (!is_null($this->container['proofs']) && (count($this->container['proofs']) > 50)) {
            $invalidProperties[] = "invalid value for 'proofs', number of items must be less than or equal to 50.";
        }

        if (!is_null($this->container['proofs']) && (count($this->container['proofs']) < 1)) {
            $invalidProperties[] = "invalid value for 'proofs', number of items must be greater than or equal to 1.";
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
     * Gets points
     *
     * @return ClaimDowntimePoint[]|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param ClaimDowntimePoint[]|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        if (is_null($points)) {
            throw new \InvalidArgumentException('non-nullable points cannot be null');
        }
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \MagDv\Cargomart\Dto\ClaimDowntimeOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \MagDv\Cargomart\Dto\ClaimDowntimeOrder $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets claimant
     *
     * @return \MagDv\Cargomart\Dto\ClaimParticipant
     */
    public function getClaimant()
    {
        return $this->container['claimant'];
    }

    /**
     * Sets claimant
     *
     * @param \MagDv\Cargomart\Dto\ClaimParticipant $claimant Реквизиты заявителя
     *
     * @return self
     */
    public function setClaimant($claimant)
    {
        if (is_null($claimant)) {
            throw new \InvalidArgumentException('non-nullable claimant cannot be null');
        }
        $this->container['claimant'] = $claimant;

        return $this;
    }

    /**
     * Gets respondent
     *
     * @return \MagDv\Cargomart\Dto\ClaimParticipant
     */
    public function getRespondent()
    {
        return $this->container['respondent'];
    }

    /**
     * Sets respondent
     *
     * @param \MagDv\Cargomart\Dto\ClaimParticipant $respondent Реквизиты ответчика
     *
     * @return self
     */
    public function setRespondent($respondent)
    {
        if (is_null($respondent)) {
            throw new \InvalidArgumentException('non-nullable respondent cannot be null');
        }
        $this->container['respondent'] = $respondent;

        return $this;
    }

    /**
     * Gets vehicle
     *
     * @return \MagDv\Cargomart\Dto\ClaimDowntimeVehicle
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     *
     * @param \MagDv\Cargomart\Dto\ClaimDowntimeVehicle $vehicle vehicle
     *
     * @return self
     */
    public function setVehicle($vehicle)
    {
        if (is_null($vehicle)) {
            throw new \InvalidArgumentException('non-nullable vehicle cannot be null');
        }
        $this->container['vehicle'] = $vehicle;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \MagDv\Cargomart\Dto\ClaimDowntimeContract
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \MagDv\Cargomart\Dto\ClaimDowntimeContract $contract contract
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
     * Gets bank_details
     *
     * @return \MagDv\Cargomart\Dto\ClaimBankDetails
     */
    public function getBankDetails()
    {
        return $this->container['bank_details'];
    }

    /**
     * Sets bank_details
     *
     * @param \MagDv\Cargomart\Dto\ClaimBankDetails $bank_details bank_details
     *
     * @return self
     */
    public function setBankDetails($bank_details)
    {
        if (is_null($bank_details)) {
            throw new \InvalidArgumentException('non-nullable bank_details cannot be null');
        }
        $this->container['bank_details'] = $bank_details;

        return $this;
    }

    /**
     * Gets downtime
     *
     * @return \MagDv\Cargomart\Dto\Downtime
     */
    public function getDowntime()
    {
        return $this->container['downtime'];
    }

    /**
     * Sets downtime
     *
     * @param \MagDv\Cargomart\Dto\Downtime $downtime Простой по заявке
     *
     * @return self
     */
    public function setDowntime($downtime)
    {
        if (is_null($downtime)) {
            throw new \InvalidArgumentException('non-nullable downtime cannot be null');
        }
        $this->container['downtime'] = $downtime;

        return $this;
    }

    /**
     * Gets proofs
     *
     * @return \MagDv\Cargomart\Dto\ClaimProofDocument[]|null
     */
    public function getProofs()
    {
        return $this->container['proofs'];
    }

    /**
     * Sets proofs
     *
     * @param \MagDv\Cargomart\Dto\ClaimProofDocument[]|null $proofs Документы подтверждающие факт простоя для претензии о простое по заявке (сделать обязательными после реализации)
     *
     * @return self
     */
    public function setProofs($proofs)
    {
        if (is_null($proofs)) {
            throw new \InvalidArgumentException('non-nullable proofs cannot be null');
        }

        if ((count($proofs) > 50)) {
            throw new \InvalidArgumentException('invalid value for $proofs when calling ClaimDowntimeCreateRequest., number of items must be less than or equal to 50.');
        }
        if ((count($proofs) < 1)) {
            throw new \InvalidArgumentException('invalid length for $proofs when calling ClaimDowntimeCreateRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['proofs'] = $proofs;

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


