<?php
/**
 * StoragePointExport
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
 * StoragePointExport Class Doc Comment
 *
 * @category Class
 * @description Экспортная информация по компании для заказ
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StoragePointExport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'storage-point-export';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'address_info' => '\MagDv\Cargomart\Dto\AddressInfo',
        'address_object' => '\MagDv\Cargomart\Dto\Address',
        'code' => 'string',
        'title' => 'string',
        'address' => 'string',
        'locality_name' => 'string',
        'legal_status' => '\MagDv\Cargomart\Dto\LegalFormEnum',
        'legal_name' => 'string',
        'is_edm' => 'bool',
        'point_shipper' => '\MagDv\Cargomart\Dto\PointShipper',
        'house' => 'string',
        'comment' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'storage_type' => '\MagDv\Cargomart\Dto\RoutePointType',
        'owner' => '\MagDv\Cargomart\Dto\PointShipper'
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
        'address_info' => null,
        'address_object' => null,
        'code' => null,
        'title' => null,
        'address' => null,
        'locality_name' => null,
        'legal_status' => null,
        'legal_name' => null,
        'is_edm' => null,
        'point_shipper' => null,
        'house' => null,
        'comment' => null,
        'latitude' => null,
        'longitude' => null,
        'storage_type' => null,
        'owner' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'address_info' => false,
        'address_object' => false,
        'code' => false,
        'title' => false,
        'address' => false,
        'locality_name' => false,
        'legal_status' => false,
        'legal_name' => false,
        'is_edm' => false,
        'point_shipper' => false,
        'house' => false,
        'comment' => false,
        'latitude' => false,
        'longitude' => false,
        'storage_type' => false,
        'owner' => false
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
        'address_info' => 'addressInfo',
        'address_object' => 'addressObject',
        'code' => 'code',
        'title' => 'title',
        'address' => 'address',
        'locality_name' => 'localityName',
        'legal_status' => 'legalStatus',
        'legal_name' => 'legalName',
        'is_edm' => 'isEdm',
        'point_shipper' => 'pointShipper',
        'house' => 'house',
        'comment' => 'comment',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'storage_type' => 'storageType',
        'owner' => 'owner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'address_info' => 'setAddressInfo',
        'address_object' => 'setAddressObject',
        'code' => 'setCode',
        'title' => 'setTitle',
        'address' => 'setAddress',
        'locality_name' => 'setLocalityName',
        'legal_status' => 'setLegalStatus',
        'legal_name' => 'setLegalName',
        'is_edm' => 'setIsEdm',
        'point_shipper' => 'setPointShipper',
        'house' => 'setHouse',
        'comment' => 'setComment',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'storage_type' => 'setStorageType',
        'owner' => 'setOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'address_info' => 'getAddressInfo',
        'address_object' => 'getAddressObject',
        'code' => 'getCode',
        'title' => 'getTitle',
        'address' => 'getAddress',
        'locality_name' => 'getLocalityName',
        'legal_status' => 'getLegalStatus',
        'legal_name' => 'getLegalName',
        'is_edm' => 'getIsEdm',
        'point_shipper' => 'getPointShipper',
        'house' => 'getHouse',
        'comment' => 'getComment',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'storage_type' => 'getStorageType',
        'owner' => 'getOwner'
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
        $this->setIfExists('address_info', $data ?? [], null);
        $this->setIfExists('address_object', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('locality_name', $data ?? [], null);
        $this->setIfExists('legal_status', $data ?? [], null);
        $this->setIfExists('legal_name', $data ?? [], null);
        $this->setIfExists('is_edm', $data ?? [], false);
        $this->setIfExists('point_shipper', $data ?? [], null);
        $this->setIfExists('house', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('storage_type', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Id пункта
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
     * Gets address_info
     *
     * @return \MagDv\Cargomart\Dto\AddressInfo|null
     */
    public function getAddressInfo()
    {
        return $this->container['address_info'];
    }

    /**
     * Sets address_info
     *
     * @param \MagDv\Cargomart\Dto\AddressInfo|null $address_info Адрес пункта погрузки/выгрузки в виде объекта
     *
     * @return self
     */
    public function setAddressInfo($address_info)
    {
        if (is_null($address_info)) {
            throw new \InvalidArgumentException('non-nullable address_info cannot be null');
        }
        $this->container['address_info'] = $address_info;

        return $this;
    }

    /**
     * Gets address_object
     *
     * @return \MagDv\Cargomart\Dto\Address|null
     */
    public function getAddressObject()
    {
        return $this->container['address_object'];
    }

    /**
     * Sets address_object
     *
     * @param \MagDv\Cargomart\Dto\Address|null $address_object Адрес пункта погрузки/выгрузки в виде объекта
     *
     * @return self
     */
    public function setAddressObject($address_object)
    {
        if (is_null($address_object)) {
            throw new \InvalidArgumentException('non-nullable address_object cannot be null');
        }
        $this->container['address_object'] = $address_object;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     * @deprecated
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code @deprecated Кладр код пункта. Вместо этого использовать addressObject.
     *
     * @return self
     * @deprecated
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Название пункта
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     * @deprecated
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address @deprecated Адрес пункта. Вместо этого использовать addressObject.
     *
     * @return self
     * @deprecated
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets locality_name
     *
     * @return string|null
     */
    public function getLocalityName()
    {
        return $this->container['locality_name'];
    }

    /**
     * Sets locality_name
     *
     * @param string|null $locality_name Краткое название пункта / полное название
     *
     * @return self
     */
    public function setLocalityName($locality_name)
    {
        if (is_null($locality_name)) {
            throw new \InvalidArgumentException('non-nullable locality_name cannot be null');
        }
        $this->container['locality_name'] = $locality_name;

        return $this;
    }

    /**
     * Gets legal_status
     *
     * @return \MagDv\Cargomart\Dto\LegalFormEnum|null
     */
    public function getLegalStatus()
    {
        return $this->container['legal_status'];
    }

    /**
     * Sets legal_status
     *
     * @param \MagDv\Cargomart\Dto\LegalFormEnum|null $legal_status Юридический статус
     *
     * @return self
     */
    public function setLegalStatus($legal_status)
    {
        if (is_null($legal_status)) {
            throw new \InvalidArgumentException('non-nullable legal_status cannot be null');
        }
        $this->container['legal_status'] = $legal_status;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string|null $legal_name Юридическое наименование или ФИО
     *
     * @return self
     */
    public function setLegalName($legal_name)
    {
        if (is_null($legal_name)) {
            throw new \InvalidArgumentException('non-nullable legal_name cannot be null');
        }
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets is_edm
     *
     * @return bool|null
     */
    public function getIsEdm()
    {
        return $this->container['is_edm'];
    }

    /**
     * Sets is_edm
     *
     * @param bool|null $is_edm Участвует в обмене ЭТрН
     *
     * @return self
     */
    public function setIsEdm($is_edm)
    {
        if (is_null($is_edm)) {
            throw new \InvalidArgumentException('non-nullable is_edm cannot be null');
        }
        $this->container['is_edm'] = $is_edm;

        return $this;
    }

    /**
     * Gets point_shipper
     *
     * @return \MagDv\Cargomart\Dto\PointShipper|null
     */
    public function getPointShipper()
    {
        return $this->container['point_shipper'];
    }

    /**
     * Sets point_shipper
     *
     * @param \MagDv\Cargomart\Dto\PointShipper|null $point_shipper Грузополучатель/грузоотправитель
     *
     * @return self
     */
    public function setPointShipper($point_shipper)
    {
        if (is_null($point_shipper)) {
            throw new \InvalidArgumentException('non-nullable point_shipper cannot be null');
        }
        $this->container['point_shipper'] = $point_shipper;

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
     * @param string|null $house @deprecated Дом. Вместо этого использовать addressObject.
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
     * Gets latitude
     *
     * @return float|null
     * @deprecated
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude @deprecated Широта. Вместо этого использовать addressObject.
     *
     * @return self
     * @deprecated
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     * @deprecated
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude @deprecated Долгота. Вместо этого использовать addressObject.
     *
     * @return self
     * @deprecated
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets storage_type
     *
     * @return \MagDv\Cargomart\Dto\RoutePointType|null
     */
    public function getStorageType()
    {
        return $this->container['storage_type'];
    }

    /**
     * Sets storage_type
     *
     * @param \MagDv\Cargomart\Dto\RoutePointType|null $storage_type Тип пункта погрузки
     *
     * @return self
     */
    public function setStorageType($storage_type)
    {
        if (is_null($storage_type)) {
            throw new \InvalidArgumentException('non-nullable storage_type cannot be null');
        }
        $this->container['storage_type'] = $storage_type;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \MagDv\Cargomart\Dto\PointShipper|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \MagDv\Cargomart\Dto\PointShipper|null $owner Владелец инфраструктуры склада
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }
        $this->container['owner'] = $owner;

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


