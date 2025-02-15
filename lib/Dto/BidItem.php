<?php
/**
 * BidItem
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
 * BidItem Class Doc Comment
 *
 * @category Class
 * @description Объект заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BidItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BidItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'value' => 'string',
        'vat_less_value' => 'string',
        'display_value' => 'string',
        'company_id' => 'string',
        'creator_id' => 'int',
        'is_win_bid' => 'bool',
        'create_date' => '\DateTime',
        'vat_rate' => 'float',
        'currency_code' => 'string',
        'price_type' => '\MagDv\Cargomart\Dto\OrderPriceType'
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
        'value' => 'cm-price',
        'vat_less_value' => 'cm-price',
        'display_value' => 'cm-price',
        'company_id' => null,
        'creator_id' => null,
        'is_win_bid' => null,
        'create_date' => 'date-time',
        'vat_rate' => null,
        'currency_code' => null,
        'price_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'value' => false,
        'vat_less_value' => false,
        'display_value' => false,
        'company_id' => false,
        'creator_id' => false,
        'is_win_bid' => false,
        'create_date' => false,
        'vat_rate' => false,
        'currency_code' => false,
        'price_type' => false
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
        'value' => 'value',
        'vat_less_value' => 'vatLessValue',
        'display_value' => 'displayValue',
        'company_id' => 'companyId',
        'creator_id' => 'creatorId',
        'is_win_bid' => 'isWinBid',
        'create_date' => 'createDate',
        'vat_rate' => 'vatRate',
        'currency_code' => 'currencyCode',
        'price_type' => 'priceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'value' => 'setValue',
        'vat_less_value' => 'setVatLessValue',
        'display_value' => 'setDisplayValue',
        'company_id' => 'setCompanyId',
        'creator_id' => 'setCreatorId',
        'is_win_bid' => 'setIsWinBid',
        'create_date' => 'setCreateDate',
        'vat_rate' => 'setVatRate',
        'currency_code' => 'setCurrencyCode',
        'price_type' => 'setPriceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'value' => 'getValue',
        'vat_less_value' => 'getVatLessValue',
        'display_value' => 'getDisplayValue',
        'company_id' => 'getCompanyId',
        'creator_id' => 'getCreatorId',
        'is_win_bid' => 'getIsWinBid',
        'create_date' => 'getCreateDate',
        'vat_rate' => 'getVatRate',
        'currency_code' => 'getCurrencyCode',
        'price_type' => 'getPriceType'
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
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('vat_less_value', $data ?? [], null);
        $this->setIfExists('display_value', $data ?? [], null);
        $this->setIfExists('company_id', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('is_win_bid', $data ?? [], false);
        $this->setIfExists('create_date', $data ?? [], null);
        $this->setIfExists('vat_rate', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('price_type', $data ?? [], null);
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
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if (!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['value'])) {
            $invalidProperties[] = "invalid value for 'value', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
        }

        if (!is_null($this->container['vat_less_value']) && !preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['vat_less_value'])) {
            $invalidProperties[] = "invalid value for 'vat_less_value', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
        }

        if ($this->container['display_value'] === null) {
            $invalidProperties[] = "'display_value' can't be null";
        }
        if (!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['display_value'])) {
            $invalidProperties[] = "invalid value for 'display_value', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
        }

        if ($this->container['create_date'] === null) {
            $invalidProperties[] = "'create_date' can't be null";
        }
        if ($this->container['vat_rate'] === null) {
            $invalidProperties[] = "'vat_rate' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['price_type'] === null) {
            $invalidProperties[] = "'price_type' can't be null";
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
     * @param int $id Идентификатор ставки
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Размер ставки
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($value)))) {
            throw new \InvalidArgumentException("invalid value for \$value when calling BidItem., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets vat_less_value
     *
     * @return string|null
     */
    public function getVatLessValue()
    {
        return $this->container['vat_less_value'];
    }

    /**
     * Sets vat_less_value
     *
     * @param string|null $vat_less_value Ставка отчищенная от НДС
     *
     * @return self
     */
    public function setVatLessValue($vat_less_value)
    {
        if (is_null($vat_less_value)) {
            throw new \InvalidArgumentException('non-nullable vat_less_value cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($vat_less_value)))) {
            throw new \InvalidArgumentException("invalid value for \$vat_less_value when calling BidItem., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['vat_less_value'] = $vat_less_value;

        return $this;
    }

    /**
     * Gets display_value
     *
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->container['display_value'];
    }

    /**
     * Sets display_value
     *
     * @param string $display_value Ставка отображаемая в зависимости от пользователя
     *
     * @return self
     */
    public function setDisplayValue($display_value)
    {
        if (is_null($display_value)) {
            throw new \InvalidArgumentException('non-nullable display_value cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($display_value)))) {
            throw new \InvalidArgumentException("invalid value for \$display_value when calling BidItem., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['display_value'] = $display_value;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id Идентификатор компании (хэш)
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        if (is_null($company_id)) {
            throw new \InvalidArgumentException('non-nullable company_id cannot be null');
        }
        $this->container['company_id'] = $company_id;

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
     * @param int|null $creator_id Создатель ставки
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
     * Gets is_win_bid
     *
     * @return bool|null
     */
    public function getIsWinBid()
    {
        return $this->container['is_win_bid'];
    }

    /**
     * Sets is_win_bid
     *
     * @param bool|null $is_win_bid Является победной ставкой
     *
     * @return self
     */
    public function setIsWinBid($is_win_bid)
    {
        if (is_null($is_win_bid)) {
            throw new \InvalidArgumentException('non-nullable is_win_bid cannot be null');
        }
        $this->container['is_win_bid'] = $is_win_bid;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date Дата создания ставки
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
     * Gets vat_rate
     *
     * @return float
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float $vat_rate Ставка НДС
     *
     * @return self
     */
    public function setVatRate($vat_rate)
    {
        if (is_null($vat_rate)) {
            throw new \InvalidArgumentException('non-nullable vat_rate cannot be null');
        }
        $this->container['vat_rate'] = $vat_rate;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Код валюты заказа
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return \MagDv\Cargomart\Dto\OrderPriceType
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param \MagDv\Cargomart\Dto\OrderPriceType $price_type price_type
     *
     * @return self
     */
    public function setPriceType($price_type)
    {
        if (is_null($price_type)) {
            throw new \InvalidArgumentException('non-nullable price_type cannot be null');
        }
        $this->container['price_type'] = $price_type;

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


