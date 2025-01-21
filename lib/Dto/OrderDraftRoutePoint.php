<?php
/**
 * OrderDraftRoutePoint
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
 * OrderDraftRoutePoint Class Doc Comment
 *
 * @category Class
 * @description Данные для редактирования пункта маршрута
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDraftRoutePoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDraftRoutePoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'storage' => '\MagDv\Cargomart\Dto\StoragePointItemDiff',
        'type' => '\MagDv\Cargomart\Dto\RoutePointType',
        'from_date' => '\DateTime',
        'from_time' => 'string',
        'to_time' => 'string',
        'is_according_to_work_schedule' => 'bool',
        'additional_info' => 'string'
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
        'storage' => null,
        'type' => null,
        'from_date' => 'date',
        'from_time' => 'time',
        'to_time' => 'time',
        'is_according_to_work_schedule' => null,
        'additional_info' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'storage' => false,
        'type' => false,
        'from_date' => false,
        'from_time' => false,
        'to_time' => false,
        'is_according_to_work_schedule' => false,
        'additional_info' => false
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
        'storage' => 'storage',
        'type' => 'type',
        'from_date' => 'fromDate',
        'from_time' => 'fromTime',
        'to_time' => 'toTime',
        'is_according_to_work_schedule' => 'isAccordingToWorkSchedule',
        'additional_info' => 'additionalInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'storage' => 'setStorage',
        'type' => 'setType',
        'from_date' => 'setFromDate',
        'from_time' => 'setFromTime',
        'to_time' => 'setToTime',
        'is_according_to_work_schedule' => 'setIsAccordingToWorkSchedule',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'storage' => 'getStorage',
        'type' => 'getType',
        'from_date' => 'getFromDate',
        'from_time' => 'getFromTime',
        'to_time' => 'getToTime',
        'is_according_to_work_schedule' => 'getIsAccordingToWorkSchedule',
        'additional_info' => 'getAdditionalInfo'
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
        $this->setIfExists('storage', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('from_time', $data ?? [], null);
        $this->setIfExists('to_time', $data ?? [], null);
        $this->setIfExists('is_according_to_work_schedule', $data ?? [], false);
        $this->setIfExists('additional_info', $data ?? [], null);
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

        if (!is_null($this->container['from_time']) && !preg_match("/^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/", $this->container['from_time'])) {
            $invalidProperties[] = "invalid value for 'from_time', must be conform to the pattern /^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/.";
        }

        if (!is_null($this->container['to_time']) && !preg_match("/^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/", $this->container['to_time'])) {
            $invalidProperties[] = "invalid value for 'to_time', must be conform to the pattern /^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/.";
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор редактируемой маршрутной точки
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
     * Gets storage
     *
     * @return \MagDv\Cargomart\Dto\StoragePointItemDiff|null
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param \MagDv\Cargomart\Dto\StoragePointItemDiff|null $storage Данные склада маршрутного пункта
     *
     * @return self
     */
    public function setStorage($storage)
    {
        if (is_null($storage)) {
            throw new \InvalidArgumentException('non-nullable storage cannot be null');
        }
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \MagDv\Cargomart\Dto\RoutePointType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MagDv\Cargomart\Dto\RoutePointType|null $type Тип точки
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
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date Диапазон дат на пункте маршрута ОТ. YYYY-MM-DD
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets from_time
     *
     * @return string|null
     */
    public function getFromTime()
    {
        return $this->container['from_time'];
    }

    /**
     * Sets from_time
     *
     * @param string|null $from_time Время работы пункта маршрута ОТ. ЧЧ:ММ:СС
     *
     * @return self
     */
    public function setFromTime($from_time)
    {
        if (is_null($from_time)) {
            throw new \InvalidArgumentException('non-nullable from_time cannot be null');
        }

        if ((!preg_match("/^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/", ObjectSerializer::toString($from_time)))) {
            throw new \InvalidArgumentException("invalid value for \$from_time when calling OrderDraftRoutePoint., must conform to the pattern /^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/.");
        }

        $this->container['from_time'] = $from_time;

        return $this;
    }

    /**
     * Gets to_time
     *
     * @return string|null
     */
    public function getToTime()
    {
        return $this->container['to_time'];
    }

    /**
     * Sets to_time
     *
     * @param string|null $to_time Время работы пункта маршрута ДО. ЧЧ:ММ:СС
     *
     * @return self
     */
    public function setToTime($to_time)
    {
        if (is_null($to_time)) {
            throw new \InvalidArgumentException('non-nullable to_time cannot be null');
        }

        if ((!preg_match("/^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/", ObjectSerializer::toString($to_time)))) {
            throw new \InvalidArgumentException("invalid value for \$to_time when calling OrderDraftRoutePoint., must conform to the pattern /^(([0-1][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?|24:00(:00)?|)$/.");
        }

        $this->container['to_time'] = $to_time;

        return $this;
    }

    /**
     * Gets is_according_to_work_schedule
     *
     * @return bool|null
     */
    public function getIsAccordingToWorkSchedule()
    {
        return $this->container['is_according_to_work_schedule'];
    }

    /**
     * Sets is_according_to_work_schedule
     *
     * @param bool|null $is_according_to_work_schedule Флаг времени подачи машины по графику работы пункта
     *
     * @return self
     */
    public function setIsAccordingToWorkSchedule($is_according_to_work_schedule)
    {
        if (is_null($is_according_to_work_schedule)) {
            throw new \InvalidArgumentException('non-nullable is_according_to_work_schedule cannot be null');
        }
        $this->container['is_according_to_work_schedule'] = $is_according_to_work_schedule;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param string|null $additional_info Комментарий к пункту маршрута в заказе
     *
     * @return self
     */
    public function setAdditionalInfo($additional_info)
    {
        if (is_null($additional_info)) {
            throw new \InvalidArgumentException('non-nullable additional_info cannot be null');
        }
        $this->container['additional_info'] = $additional_info;

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


