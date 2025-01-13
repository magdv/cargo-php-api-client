<?php
/**
 * ProposalExpeditorOffer
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
 * ProposalExpeditorOffer Class Doc Comment
 *
 * @category Class
 * @description Данные по предложению цены
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProposalExpeditorOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'proposal-expeditor-offer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'carrier_id' => 'string',
        'creator_id' => 'int',
        'consignor_price' => '\MagDv\Cargomart\Dto\PayValue',
        'carrier_price' => '\MagDv\Cargomart\Dto\PayValue',
        'load_date_time' => '\MagDv\Cargomart\Dto\DateTimeSeparate',
        'update_date' => '\DateTime'
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
        'carrier_id' => null,
        'creator_id' => null,
        'consignor_price' => null,
        'carrier_price' => null,
        'load_date_time' => null,
        'update_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'carrier_id' => false,
        'creator_id' => false,
        'consignor_price' => false,
        'carrier_price' => false,
        'load_date_time' => false,
        'update_date' => false
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
        'carrier_id' => 'carrierId',
        'creator_id' => 'creatorId',
        'consignor_price' => 'consignorPrice',
        'carrier_price' => 'carrierPrice',
        'load_date_time' => 'loadDateTime',
        'update_date' => 'updateDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'carrier_id' => 'setCarrierId',
        'creator_id' => 'setCreatorId',
        'consignor_price' => 'setConsignorPrice',
        'carrier_price' => 'setCarrierPrice',
        'load_date_time' => 'setLoadDateTime',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'carrier_id' => 'getCarrierId',
        'creator_id' => 'getCreatorId',
        'consignor_price' => 'getConsignorPrice',
        'carrier_price' => 'getCarrierPrice',
        'load_date_time' => 'getLoadDateTime',
        'update_date' => 'getUpdateDate'
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
        $this->setIfExists('carrier_id', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('consignor_price', $data ?? [], null);
        $this->setIfExists('carrier_price', $data ?? [], null);
        $this->setIfExists('load_date_time', $data ?? [], null);
        $this->setIfExists('update_date', $data ?? [], null);
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
        if ($this->container['carrier_id'] === null) {
            $invalidProperties[] = "'carrier_id' can't be null";
        }
        if ($this->container['creator_id'] === null) {
            $invalidProperties[] = "'creator_id' can't be null";
        }
        if ($this->container['consignor_price'] === null) {
            $invalidProperties[] = "'consignor_price' can't be null";
        }
        if ($this->container['carrier_price'] === null) {
            $invalidProperties[] = "'carrier_price' can't be null";
        }
        if ($this->container['update_date'] === null) {
            $invalidProperties[] = "'update_date' can't be null";
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
     * @param string $id Идентификатор предложения
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
     * Gets carrier_id
     *
     * @return string
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param string $carrier_id Id перевозчика
     *
     * @return self
     */
    public function setCarrierId($carrier_id)
    {
        if (is_null($carrier_id)) {
            throw new \InvalidArgumentException('non-nullable carrier_id cannot be null');
        }
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param int $creator_id Идентификатор пользователя, оставившего предложение
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
     * Gets consignor_price
     *
     * @return \MagDv\Cargomart\Dto\PayValue
     */
    public function getConsignorPrice()
    {
        return $this->container['consignor_price'];
    }

    /**
     * Sets consignor_price
     *
     * @param \MagDv\Cargomart\Dto\PayValue $consignor_price Цена для отправителя, как он её видит
     *
     * @return self
     */
    public function setConsignorPrice($consignor_price)
    {
        if (is_null($consignor_price)) {
            throw new \InvalidArgumentException('non-nullable consignor_price cannot be null');
        }
        $this->container['consignor_price'] = $consignor_price;

        return $this;
    }

    /**
     * Gets carrier_price
     *
     * @return \MagDv\Cargomart\Dto\PayValue
     */
    public function getCarrierPrice()
    {
        return $this->container['carrier_price'];
    }

    /**
     * Sets carrier_price
     *
     * @param \MagDv\Cargomart\Dto\PayValue $carrier_price Цена для перевозчика, как он её видит
     *
     * @return self
     */
    public function setCarrierPrice($carrier_price)
    {
        if (is_null($carrier_price)) {
            throw new \InvalidArgumentException('non-nullable carrier_price cannot be null');
        }
        $this->container['carrier_price'] = $carrier_price;

        return $this;
    }

    /**
     * Gets load_date_time
     *
     * @return \MagDv\Cargomart\Dto\DateTimeSeparate|null
     */
    public function getLoadDateTime()
    {
        return $this->container['load_date_time'];
    }

    /**
     * Sets load_date_time
     *
     * @param \MagDv\Cargomart\Dto\DateTimeSeparate|null $load_date_time Дата и время погрузки, предложенная перевозчиком
     *
     * @return self
     */
    public function setLoadDateTime($load_date_time)
    {
        if (is_null($load_date_time)) {
            throw new \InvalidArgumentException('non-nullable load_date_time cannot be null');
        }
        $this->container['load_date_time'] = $load_date_time;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date Дата последнего изменения цены в предложении
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


