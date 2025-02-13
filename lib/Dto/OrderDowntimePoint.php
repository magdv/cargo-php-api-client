<?php
/**
 * OrderDowntimePoint
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
 * OrderDowntimePoint Class Doc Comment
 *
 * @category Class
 * @description Объект простоя по конкретному пункту погрузки/выгрузки заявки
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDowntimePoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDowntimePoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'planned_arrival' => 'string',
        'planned_departure' => 'string',
        'actual_arrival' => 'string',
        'actual_departure' => 'string',
        'reason' => 'string',
        'downtime' => '\MagDv\Cargomart\Dto\Downtime'
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
        'planned_arrival' => null,
        'planned_departure' => null,
        'actual_arrival' => null,
        'actual_departure' => null,
        'reason' => null,
        'downtime' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'planned_arrival' => false,
        'planned_departure' => false,
        'actual_arrival' => false,
        'actual_departure' => false,
        'reason' => false,
        'downtime' => false
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
        'planned_arrival' => 'plannedArrival',
        'planned_departure' => 'plannedDeparture',
        'actual_arrival' => 'actualArrival',
        'actual_departure' => 'actualDeparture',
        'reason' => 'reason',
        'downtime' => 'downtime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'planned_arrival' => 'setPlannedArrival',
        'planned_departure' => 'setPlannedDeparture',
        'actual_arrival' => 'setActualArrival',
        'actual_departure' => 'setActualDeparture',
        'reason' => 'setReason',
        'downtime' => 'setDowntime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'planned_arrival' => 'getPlannedArrival',
        'planned_departure' => 'getPlannedDeparture',
        'actual_arrival' => 'getActualArrival',
        'actual_departure' => 'getActualDeparture',
        'reason' => 'getReason',
        'downtime' => 'getDowntime'
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
        $this->setIfExists('planned_arrival', $data ?? [], null);
        $this->setIfExists('planned_departure', $data ?? [], null);
        $this->setIfExists('actual_arrival', $data ?? [], null);
        $this->setIfExists('actual_departure', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('downtime', $data ?? [], null);
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
        if (($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if ($this->container['planned_arrival'] === null) {
            $invalidProperties[] = "'planned_arrival' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", $this->container['planned_arrival'])) {
            $invalidProperties[] = "invalid value for 'planned_arrival', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.";
        }

        if ($this->container['planned_departure'] === null) {
            $invalidProperties[] = "'planned_departure' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", $this->container['planned_departure'])) {
            $invalidProperties[] = "invalid value for 'planned_departure', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.";
        }

        if ($this->container['actual_arrival'] === null) {
            $invalidProperties[] = "'actual_arrival' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", $this->container['actual_arrival'])) {
            $invalidProperties[] = "invalid value for 'actual_arrival', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.";
        }

        if ($this->container['actual_departure'] === null) {
            $invalidProperties[] = "'actual_departure' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", $this->container['actual_departure'])) {
            $invalidProperties[] = "invalid value for 'actual_departure', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.";
        }

        if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 2000)) {
            $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 2000.";
        }

        if ($this->container['downtime'] === null) {
            $invalidProperties[] = "'downtime' can't be null";
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
     * @param int $id Числовой идентификатор объекта
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling OrderDowntimePoint., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets planned_arrival
     *
     * @return string
     */
    public function getPlannedArrival()
    {
        return $this->container['planned_arrival'];
    }

    /**
     * Sets planned_arrival
     *
     * @param string $planned_arrival Дата и время c тайм зоной в формате ISO 8601 yyyy-MM-ddZHH:mmXXX,
     *
     * @return self
     */
    public function setPlannedArrival($planned_arrival)
    {
        if (is_null($planned_arrival)) {
            throw new \InvalidArgumentException('non-nullable planned_arrival cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", ObjectSerializer::toString($planned_arrival)))) {
            throw new \InvalidArgumentException("invalid value for \$planned_arrival when calling OrderDowntimePoint., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.");
        }

        $this->container['planned_arrival'] = $planned_arrival;

        return $this;
    }

    /**
     * Gets planned_departure
     *
     * @return string
     */
    public function getPlannedDeparture()
    {
        return $this->container['planned_departure'];
    }

    /**
     * Sets planned_departure
     *
     * @param string $planned_departure Дата и время c тайм зоной в формате ISO 8601 yyyy-MM-ddZHH:mmXXX,
     *
     * @return self
     */
    public function setPlannedDeparture($planned_departure)
    {
        if (is_null($planned_departure)) {
            throw new \InvalidArgumentException('non-nullable planned_departure cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", ObjectSerializer::toString($planned_departure)))) {
            throw new \InvalidArgumentException("invalid value for \$planned_departure when calling OrderDowntimePoint., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.");
        }

        $this->container['planned_departure'] = $planned_departure;

        return $this;
    }

    /**
     * Gets actual_arrival
     *
     * @return string
     */
    public function getActualArrival()
    {
        return $this->container['actual_arrival'];
    }

    /**
     * Sets actual_arrival
     *
     * @param string $actual_arrival Дата и время c тайм зоной в формате ISO 8601 yyyy-MM-ddZHH:mmXXX,
     *
     * @return self
     */
    public function setActualArrival($actual_arrival)
    {
        if (is_null($actual_arrival)) {
            throw new \InvalidArgumentException('non-nullable actual_arrival cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", ObjectSerializer::toString($actual_arrival)))) {
            throw new \InvalidArgumentException("invalid value for \$actual_arrival when calling OrderDowntimePoint., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.");
        }

        $this->container['actual_arrival'] = $actual_arrival;

        return $this;
    }

    /**
     * Gets actual_departure
     *
     * @return string
     */
    public function getActualDeparture()
    {
        return $this->container['actual_departure'];
    }

    /**
     * Sets actual_departure
     *
     * @param string $actual_departure Дата и время c тайм зоной в формате ISO 8601 yyyy-MM-ddZHH:mmXXX,
     *
     * @return self
     */
    public function setActualDeparture($actual_departure)
    {
        if (is_null($actual_departure)) {
            throw new \InvalidArgumentException('non-nullable actual_departure cannot be null');
        }

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/", ObjectSerializer::toString($actual_departure)))) {
            throw new \InvalidArgumentException("invalid value for \$actual_departure when calling OrderDowntimePoint., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}[\\+\\-]\\d{2}(:\\d{2})?$/.");
        }

        $this->container['actual_departure'] = $actual_departure;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason Среднее текстовое сообщение
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        if ((mb_strlen($reason) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $reason when calling OrderDowntimePoint., must be smaller than or equal to 2000.');
        }

        $this->container['reason'] = $reason;

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
     * @param \MagDv\Cargomart\Dto\Downtime $downtime Простой по точке погрузки/выгрузки заявки
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


