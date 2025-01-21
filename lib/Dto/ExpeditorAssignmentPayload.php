<?php
/**
 * ExpeditorAssignmentPayload
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
 * ExpeditorAssignmentPayload Class Doc Comment
 *
 * @category Class
 * @description Содержимое титулов поручения экспедитору
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExpeditorAssignmentPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpeditorAssignmentPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document' => '\MagDv\Cargomart\Dto\PayloadChunkDocument',
        'contract' => '\MagDv\Cargomart\Dto\PayloadChunkContract',
        'previous_document' => '\MagDv\Cargomart\Dto\PayloadChunkDocument',
        'title_client' => '\MagDv\Cargomart\Dto\PayloadChunkTitleClient',
        'title_expeditor' => '\MagDv\Cargomart\Dto\PayloadChunkTitleExpeditor',
        'title_cancel' => '\MagDv\Cargomart\Dto\PayloadChunkTitleCancel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document' => null,
        'contract' => null,
        'previous_document' => null,
        'title_client' => null,
        'title_expeditor' => null,
        'title_cancel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'document' => false,
        'contract' => false,
        'previous_document' => false,
        'title_client' => false,
        'title_expeditor' => false,
        'title_cancel' => false
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
        'document' => 'document',
        'contract' => 'contract',
        'previous_document' => 'previousDocument',
        'title_client' => 'titleClient',
        'title_expeditor' => 'titleExpeditor',
        'title_cancel' => 'titleCancel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document' => 'setDocument',
        'contract' => 'setContract',
        'previous_document' => 'setPreviousDocument',
        'title_client' => 'setTitleClient',
        'title_expeditor' => 'setTitleExpeditor',
        'title_cancel' => 'setTitleCancel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document' => 'getDocument',
        'contract' => 'getContract',
        'previous_document' => 'getPreviousDocument',
        'title_client' => 'getTitleClient',
        'title_expeditor' => 'getTitleExpeditor',
        'title_cancel' => 'getTitleCancel'
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
        $this->setIfExists('document', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('previous_document', $data ?? [], null);
        $this->setIfExists('title_client', $data ?? [], null);
        $this->setIfExists('title_expeditor', $data ?? [], null);
        $this->setIfExists('title_cancel', $data ?? [], null);
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

        if ($this->container['document'] === null) {
            $invalidProperties[] = "'document' can't be null";
        }
        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        if ($this->container['title_client'] === null) {
            $invalidProperties[] = "'title_client' can't be null";
        }
        if ($this->container['title_expeditor'] === null) {
            $invalidProperties[] = "'title_expeditor' can't be null";
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
     * Gets document
     *
     * @return \MagDv\Cargomart\Dto\PayloadChunkDocument
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \MagDv\Cargomart\Dto\PayloadChunkDocument $document document
     *
     * @return self
     */
    public function setDocument($document)
    {
        if (is_null($document)) {
            throw new \InvalidArgumentException('non-nullable document cannot be null');
        }
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \MagDv\Cargomart\Dto\PayloadChunkContract
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \MagDv\Cargomart\Dto\PayloadChunkContract $contract contract
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
     * Gets previous_document
     *
     * @return \MagDv\Cargomart\Dto\PayloadChunkDocument|null
     */
    public function getPreviousDocument()
    {
        return $this->container['previous_document'];
    }

    /**
     * Sets previous_document
     *
     * @param \MagDv\Cargomart\Dto\PayloadChunkDocument|null $previous_document previous_document
     *
     * @return self
     */
    public function setPreviousDocument($previous_document)
    {
        if (is_null($previous_document)) {
            throw new \InvalidArgumentException('non-nullable previous_document cannot be null');
        }
        $this->container['previous_document'] = $previous_document;

        return $this;
    }

    /**
     * Gets title_client
     *
     * @return \MagDv\Cargomart\Dto\PayloadChunkTitleClient
     */
    public function getTitleClient()
    {
        return $this->container['title_client'];
    }

    /**
     * Sets title_client
     *
     * @param \MagDv\Cargomart\Dto\PayloadChunkTitleClient $title_client title_client
     *
     * @return self
     */
    public function setTitleClient($title_client)
    {
        if (is_null($title_client)) {
            throw new \InvalidArgumentException('non-nullable title_client cannot be null');
        }
        $this->container['title_client'] = $title_client;

        return $this;
    }

    /**
     * Gets title_expeditor
     *
     * @return \MagDv\Cargomart\Dto\PayloadChunkTitleExpeditor
     */
    public function getTitleExpeditor()
    {
        return $this->container['title_expeditor'];
    }

    /**
     * Sets title_expeditor
     *
     * @param \MagDv\Cargomart\Dto\PayloadChunkTitleExpeditor $title_expeditor title_expeditor
     *
     * @return self
     */
    public function setTitleExpeditor($title_expeditor)
    {
        if (is_null($title_expeditor)) {
            throw new \InvalidArgumentException('non-nullable title_expeditor cannot be null');
        }
        $this->container['title_expeditor'] = $title_expeditor;

        return $this;
    }

    /**
     * Gets title_cancel
     *
     * @return \MagDv\Cargomart\Dto\PayloadChunkTitleCancel|null
     */
    public function getTitleCancel()
    {
        return $this->container['title_cancel'];
    }

    /**
     * Sets title_cancel
     *
     * @param \MagDv\Cargomart\Dto\PayloadChunkTitleCancel|null $title_cancel title_cancel
     *
     * @return self
     */
    public function setTitleCancel($title_cancel)
    {
        if (is_null($title_cancel)) {
            throw new \InvalidArgumentException('non-nullable title_cancel cannot be null');
        }
        $this->container['title_cancel'] = $title_cancel;

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


