<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country_code' => 'string',
        'code' => 'string',
        'items' => '\MagDv\Cargomart\Dto\AddressItems',
        'gar_guid' => 'string',
        'osm_id' => 'string',
        'standardized_address' => 'string',
        'coordinate' => '\MagDv\Cargomart\Dto\Coordinate',
        'postal_code' => 'string',
        'region' => 'string',
        'city' => 'string',
        'settlement' => 'string',
        'street' => 'string',
        'house' => 'string',
        'block' => 'string',
        'locality_gar_guid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country_code' => null,
        'code' => 'cm-kladr',
        'items' => null,
        'gar_guid' => 'uuid',
        'osm_id' => 'uuid',
        'standardized_address' => null,
        'coordinate' => null,
        'postal_code' => null,
        'region' => null,
        'city' => null,
        'settlement' => null,
        'street' => null,
        'house' => null,
        'block' => null,
        'locality_gar_guid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country_code' => false,
        'code' => false,
        'items' => false,
        'gar_guid' => false,
        'osm_id' => false,
        'standardized_address' => false,
        'coordinate' => false,
        'postal_code' => false,
        'region' => false,
        'city' => false,
        'settlement' => false,
        'street' => false,
        'house' => false,
        'block' => false,
        'locality_gar_guid' => false
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
        'country_code' => 'countryCode',
        'code' => 'code',
        'items' => 'items',
        'gar_guid' => 'garGuid',
        'osm_id' => 'osmId',
        'standardized_address' => 'standardizedAddress',
        'coordinate' => 'coordinate',
        'postal_code' => 'postalCode',
        'region' => 'region',
        'city' => 'city',
        'settlement' => 'settlement',
        'street' => 'street',
        'house' => 'house',
        'block' => 'block',
        'locality_gar_guid' => 'localityGarGuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'code' => 'setCode',
        'items' => 'setItems',
        'gar_guid' => 'setGarGuid',
        'osm_id' => 'setOsmId',
        'standardized_address' => 'setStandardizedAddress',
        'coordinate' => 'setCoordinate',
        'postal_code' => 'setPostalCode',
        'region' => 'setRegion',
        'city' => 'setCity',
        'settlement' => 'setSettlement',
        'street' => 'setStreet',
        'house' => 'setHouse',
        'block' => 'setBlock',
        'locality_gar_guid' => 'setLocalityGarGuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'code' => 'getCode',
        'items' => 'getItems',
        'gar_guid' => 'getGarGuid',
        'osm_id' => 'getOsmId',
        'standardized_address' => 'getStandardizedAddress',
        'coordinate' => 'getCoordinate',
        'postal_code' => 'getPostalCode',
        'region' => 'getRegion',
        'city' => 'getCity',
        'settlement' => 'getSettlement',
        'street' => 'getStreet',
        'house' => 'getHouse',
        'block' => 'getBlock',
        'locality_gar_guid' => 'getLocalityGarGuid'
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
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('gar_guid', $data ?? [], null);
        $this->setIfExists('osm_id', $data ?? [], null);
        $this->setIfExists('standardized_address', $data ?? [], null);
        $this->setIfExists('coordinate', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('settlement', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('house', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('locality_gar_guid', $data ?? [], null);
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

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ((mb_strlen($this->container['country_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 3.";
        }

        if ((mb_strlen($this->container['country_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/^[A-Z]{3}$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^[A-Z]{3}$/.";
        }

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code alpha3-код страны.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        if ((mb_strlen($country_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Address., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($country_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling Address., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[A-Z]{3}$/", ObjectSerializer::toString($country_code)))) {
            throw new \InvalidArgumentException("invalid value for \$country_code when calling Address., must conform to the pattern /^[A-Z]{3}$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code КЛАДР код адреса c префиксом кода страны (например, для России префикс 001)
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \MagDv\Cargomart\Dto\AddressItems|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \MagDv\Cargomart\Dto\AddressItems|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets gar_guid
     *
     * @return string|null
     */
    public function getGarGuid()
    {
        return $this->container['gar_guid'];
    }

    /**
     * Sets gar_guid
     *
     * @param string|null $gar_guid Идентификатор ГАР конкретного адреса с точностью до дома. Обязателен при countryCode=RUS.
     *
     * @return self
     */
    public function setGarGuid($gar_guid)
    {
        if (is_null($gar_guid)) {
            throw new \InvalidArgumentException('non-nullable gar_guid cannot be null');
        }
        $this->container['gar_guid'] = $gar_guid;

        return $this;
    }

    /**
     * Gets osm_id
     *
     * @return string|null
     */
    public function getOsmId()
    {
        return $this->container['osm_id'];
    }

    /**
     * Sets osm_id
     *
     * @param string|null $osm_id Идентификатор OpenStreetMap конкретного адреса с точностью до дома. Обязателен при countryCode=BLR.
     *
     * @return self
     */
    public function setOsmId($osm_id)
    {
        if (is_null($osm_id)) {
            throw new \InvalidArgumentException('non-nullable osm_id cannot be null');
        }
        $this->container['osm_id'] = $osm_id;

        return $this;
    }

    /**
     * Gets standardized_address
     *
     * @return string|null
     */
    public function getStandardizedAddress()
    {
        return $this->container['standardized_address'];
    }

    /**
     * Sets standardized_address
     *
     * @param string|null $standardized_address Стандартизированный адрес одной строкой
     *
     * @return self
     */
    public function setStandardizedAddress($standardized_address)
    {
        if (is_null($standardized_address)) {
            throw new \InvalidArgumentException('non-nullable standardized_address cannot be null');
        }
        $this->container['standardized_address'] = $standardized_address;

        return $this;
    }

    /**
     * Gets coordinate
     *
     * @return \MagDv\Cargomart\Dto\Coordinate|null
     */
    public function getCoordinate()
    {
        return $this->container['coordinate'];
    }

    /**
     * Sets coordinate
     *
     * @param \MagDv\Cargomart\Dto\Coordinate|null $coordinate Координаты адреса
     *
     * @return self
     */
    public function setCoordinate($coordinate)
    {
        if (is_null($coordinate)) {
            throw new \InvalidArgumentException('non-nullable coordinate cannot be null');
        }
        $this->container['coordinate'] = $coordinate;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Индекс
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     * @deprecated
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region @deprecated в пользу items.region. Регион
     *
     * @return self
     * @deprecated
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     * @deprecated
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city @deprecated в пользу items.city. Город
     *
     * @return self
     * @deprecated
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets settlement
     *
     * @return string|null
     * @deprecated
     */
    public function getSettlement()
    {
        return $this->container['settlement'];
    }

    /**
     * Sets settlement
     *
     * @param string|null $settlement @deprecated в пользу items.settlement. Населённый пункт
     *
     * @return self
     * @deprecated
     */
    public function setSettlement($settlement)
    {
        if (is_null($settlement)) {
            throw new \InvalidArgumentException('non-nullable settlement cannot be null');
        }
        $this->container['settlement'] = $settlement;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     * @deprecated
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street @deprecated в пользу items.street. Улица
     *
     * @return self
     * @deprecated
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets house
     *
     * @return string|null
     * @deprecated
     */
    public function getHouse()
    {
        return $this->container['house'];
    }

    /**
     * Sets house
     *
     * @param string|null $house @deprecated в пользу items.house. Дом
     *
     * @return self
     * @deprecated
     */
    public function setHouse($house)
    {
        if (is_null($house)) {
            throw new \InvalidArgumentException('non-nullable house cannot be null');
        }
        $this->container['house'] = $house;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     * @deprecated
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block @deprecated в пользу items.block. Корпус/строение
     *
     * @return self
     * @deprecated
     */
    public function setBlock($block)
    {
        if (is_null($block)) {
            throw new \InvalidArgumentException('non-nullable block cannot be null');
        }
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets locality_gar_guid
     *
     * @return string|null
     * @deprecated
     */
    public function getLocalityGarGuid()
    {
        return $this->container['locality_gar_guid'];
    }

    /**
     * Sets locality_gar_guid
     *
     * @param string|null $locality_gar_guid @deprecated в пользу items.getGarGuids
     *
     * @return self
     * @deprecated
     */
    public function setLocalityGarGuid($locality_gar_guid)
    {
        if (is_null($locality_gar_guid)) {
            throw new \InvalidArgumentException('non-nullable locality_gar_guid cannot be null');
        }
        $this->container['locality_gar_guid'] = $locality_gar_guid;

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


