<?php
/**
 * BidPullInfoItem
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
 * BidPullInfoItem Class Doc Comment
 *
 * @category Class
 * @description Объект заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BidPullInfoItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BidPullInfoItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'end_date' => '\DateTime',
        'currency_code' => 'string',
        'open_price' => 'string',
        'current_price' => 'string',
        'step_bid' => 'string',
        'vat_rate' => 'float',
        'bid_count' => 'int',
        'is_view' => 'bool',
        'is_no_price' => 'bool',
        'type' => '\MagDv\Cargomart\Dto\OrderType',
        'is_pin' => 'bool',
        'is_last_bid_my' => 'bool',
        'is_was_my_bid' => 'bool',
        'is_current_user_has_bid' => 'bool',
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
        'end_date' => 'date-time',
        'currency_code' => null,
        'open_price' => 'cm-price',
        'current_price' => 'cm-price',
        'step_bid' => 'cm-price',
        'vat_rate' => null,
        'bid_count' => null,
        'is_view' => null,
        'is_no_price' => null,
        'type' => null,
        'is_pin' => null,
        'is_last_bid_my' => null,
        'is_was_my_bid' => null,
        'is_current_user_has_bid' => null,
        'price_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'end_date' => false,
        'currency_code' => false,
        'open_price' => false,
        'current_price' => false,
        'step_bid' => false,
        'vat_rate' => false,
        'bid_count' => false,
        'is_view' => false,
        'is_no_price' => false,
        'type' => false,
        'is_pin' => false,
        'is_last_bid_my' => false,
        'is_was_my_bid' => false,
        'is_current_user_has_bid' => false,
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
        'end_date' => 'endDate',
        'currency_code' => 'currencyCode',
        'open_price' => 'openPrice',
        'current_price' => 'currentPrice',
        'step_bid' => 'stepBid',
        'vat_rate' => 'vatRate',
        'bid_count' => 'bidCount',
        'is_view' => 'isView',
        'is_no_price' => 'isNoPrice',
        'type' => 'type',
        'is_pin' => 'isPin',
        'is_last_bid_my' => 'isLastBidMy',
        'is_was_my_bid' => 'isWasMyBid',
        'is_current_user_has_bid' => 'isCurrentUserHasBid',
        'price_type' => 'priceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'end_date' => 'setEndDate',
        'currency_code' => 'setCurrencyCode',
        'open_price' => 'setOpenPrice',
        'current_price' => 'setCurrentPrice',
        'step_bid' => 'setStepBid',
        'vat_rate' => 'setVatRate',
        'bid_count' => 'setBidCount',
        'is_view' => 'setIsView',
        'is_no_price' => 'setIsNoPrice',
        'type' => 'setType',
        'is_pin' => 'setIsPin',
        'is_last_bid_my' => 'setIsLastBidMy',
        'is_was_my_bid' => 'setIsWasMyBid',
        'is_current_user_has_bid' => 'setIsCurrentUserHasBid',
        'price_type' => 'setPriceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'end_date' => 'getEndDate',
        'currency_code' => 'getCurrencyCode',
        'open_price' => 'getOpenPrice',
        'current_price' => 'getCurrentPrice',
        'step_bid' => 'getStepBid',
        'vat_rate' => 'getVatRate',
        'bid_count' => 'getBidCount',
        'is_view' => 'getIsView',
        'is_no_price' => 'getIsNoPrice',
        'type' => 'getType',
        'is_pin' => 'getIsPin',
        'is_last_bid_my' => 'getIsLastBidMy',
        'is_was_my_bid' => 'getIsWasMyBid',
        'is_current_user_has_bid' => 'getIsCurrentUserHasBid',
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
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('open_price', $data ?? [], null);
        $this->setIfExists('current_price', $data ?? [], null);
        $this->setIfExists('step_bid', $data ?? [], null);
        $this->setIfExists('vat_rate', $data ?? [], null);
        $this->setIfExists('bid_count', $data ?? [], null);
        $this->setIfExists('is_view', $data ?? [], false);
        $this->setIfExists('is_no_price', $data ?? [], false);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_pin', $data ?? [], false);
        $this->setIfExists('is_last_bid_my', $data ?? [], false);
        $this->setIfExists('is_was_my_bid', $data ?? [], false);
        $this->setIfExists('is_current_user_has_bid', $data ?? [], false);
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
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if (!is_null($this->container['open_price']) && !preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['open_price'])) {
            $invalidProperties[] = "invalid value for 'open_price', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
        }

        if (!is_null($this->container['current_price']) && !preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['current_price'])) {
            $invalidProperties[] = "invalid value for 'current_price', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
        }

        if (!is_null($this->container['step_bid']) && !preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", $this->container['step_bid'])) {
            $invalidProperties[] = "invalid value for 'step_bid', must be conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Идентификатор заказа
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
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date Дата окончания торгов
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

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
     * Gets open_price
     *
     * @return string|null
     */
    public function getOpenPrice()
    {
        return $this->container['open_price'];
    }

    /**
     * Sets open_price
     *
     * @param string|null $open_price Цена открытия заказа
     *
     * @return self
     */
    public function setOpenPrice($open_price)
    {
        if (is_null($open_price)) {
            throw new \InvalidArgumentException('non-nullable open_price cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($open_price)))) {
            throw new \InvalidArgumentException("invalid value for \$open_price when calling BidPullInfoItem., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['open_price'] = $open_price;

        return $this;
    }

    /**
     * Gets current_price
     *
     * @return string|null
     */
    public function getCurrentPrice()
    {
        return $this->container['current_price'];
    }

    /**
     * Sets current_price
     *
     * @param string|null $current_price Текущая цена заказа
     *
     * @return self
     */
    public function setCurrentPrice($current_price)
    {
        if (is_null($current_price)) {
            throw new \InvalidArgumentException('non-nullable current_price cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($current_price)))) {
            throw new \InvalidArgumentException("invalid value for \$current_price when calling BidPullInfoItem., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['current_price'] = $current_price;

        return $this;
    }

    /**
     * Gets step_bid
     *
     * @return string|null
     */
    public function getStepBid()
    {
        return $this->container['step_bid'];
    }

    /**
     * Sets step_bid
     *
     * @param string|null $step_bid Шаг ставки
     *
     * @return self
     */
    public function setStepBid($step_bid)
    {
        if (is_null($step_bid)) {
            throw new \InvalidArgumentException('non-nullable step_bid cannot be null');
        }

        if ((!preg_match("/^(0|([1-9]\\d*))([.]\\d{1,4})?$/", ObjectSerializer::toString($step_bid)))) {
            throw new \InvalidArgumentException("invalid value for \$step_bid when calling BidPullInfoItem., must conform to the pattern /^(0|([1-9]\\d*))([.]\\d{1,4})?$/.");
        }

        $this->container['step_bid'] = $step_bid;

        return $this;
    }

    /**
     * Gets vat_rate
     *
     * @return float|null
     */
    public function getVatRate()
    {
        return $this->container['vat_rate'];
    }

    /**
     * Sets vat_rate
     *
     * @param float|null $vat_rate Ставка НДС
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
     * Gets bid_count
     *
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->container['bid_count'];
    }

    /**
     * Sets bid_count
     *
     * @param int|null $bid_count Количество ставок на заказ
     *
     * @return self
     */
    public function setBidCount($bid_count)
    {
        if (is_null($bid_count)) {
            throw new \InvalidArgumentException('non-nullable bid_count cannot be null');
        }
        $this->container['bid_count'] = $bid_count;

        return $this;
    }

    /**
     * Gets is_view
     *
     * @return bool|null
     */
    public function getIsView()
    {
        return $this->container['is_view'];
    }

    /**
     * Sets is_view
     *
     * @param bool|null $is_view Был ли заказ просмотрен
     *
     * @return self
     */
    public function setIsView($is_view)
    {
        if (is_null($is_view)) {
            throw new \InvalidArgumentException('non-nullable is_view cannot be null');
        }
        $this->container['is_view'] = $is_view;

        return $this;
    }

    /**
     * Gets is_no_price
     *
     * @return bool|null
     */
    public function getIsNoPrice()
    {
        return $this->container['is_no_price'];
    }

    /**
     * Sets is_no_price
     *
     * @param bool|null $is_no_price Заказ без начальной цены
     *
     * @return self
     */
    public function setIsNoPrice($is_no_price)
    {
        if (is_null($is_no_price)) {
            throw new \InvalidArgumentException('non-nullable is_no_price cannot be null');
        }
        $this->container['is_no_price'] = $is_no_price;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \MagDv\Cargomart\Dto\OrderType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MagDv\Cargomart\Dto\OrderType $type Тип заказа
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_pin
     *
     * @return bool|null
     */
    public function getIsPin()
    {
        return $this->container['is_pin'];
    }

    /**
     * Sets is_pin
     *
     * @param bool|null $is_pin Заказ закреплен
     *
     * @return self
     */
    public function setIsPin($is_pin)
    {
        if (is_null($is_pin)) {
            throw new \InvalidArgumentException('non-nullable is_pin cannot be null');
        }
        $this->container['is_pin'] = $is_pin;

        return $this;
    }

    /**
     * Gets is_last_bid_my
     *
     * @return bool|null
     */
    public function getIsLastBidMy()
    {
        return $this->container['is_last_bid_my'];
    }

    /**
     * Sets is_last_bid_my
     *
     * @param bool|null $is_last_bid_my Последняя ставка моей компании
     *
     * @return self
     */
    public function setIsLastBidMy($is_last_bid_my)
    {
        if (is_null($is_last_bid_my)) {
            throw new \InvalidArgumentException('non-nullable is_last_bid_my cannot be null');
        }
        $this->container['is_last_bid_my'] = $is_last_bid_my;

        return $this;
    }

    /**
     * Gets is_was_my_bid
     *
     * @return bool|null
     */
    public function getIsWasMyBid()
    {
        return $this->container['is_was_my_bid'];
    }

    /**
     * Sets is_was_my_bid
     *
     * @param bool|null $is_was_my_bid Я делал ставку
     *
     * @return self
     */
    public function setIsWasMyBid($is_was_my_bid)
    {
        if (is_null($is_was_my_bid)) {
            throw new \InvalidArgumentException('non-nullable is_was_my_bid cannot be null');
        }
        $this->container['is_was_my_bid'] = $is_was_my_bid;

        return $this;
    }

    /**
     * Gets is_current_user_has_bid
     *
     * @return bool|null
     */
    public function getIsCurrentUserHasBid()
    {
        return $this->container['is_current_user_has_bid'];
    }

    /**
     * Sets is_current_user_has_bid
     *
     * @param bool|null $is_current_user_has_bid Текущий пользователь делал ставку
     *
     * @return self
     */
    public function setIsCurrentUserHasBid($is_current_user_has_bid)
    {
        if (is_null($is_current_user_has_bid)) {
            throw new \InvalidArgumentException('non-nullable is_current_user_has_bid cannot be null');
        }
        $this->container['is_current_user_has_bid'] = $is_current_user_has_bid;

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
     * @param \MagDv\Cargomart\Dto\OrderPriceType $price_type Тип цены
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


