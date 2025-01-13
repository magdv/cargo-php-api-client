<?php
/**
 * LocalityMetricRequest
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
 * LocalityMetricRequest Class Doc Comment
 *
 * @category Class
 * @description Создание записи метрики для поиска по пунктам отправления/назначения
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LocalityMetricRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'locality-metric-request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locality_filter' => '\MagDv\Cargomart\Dto\LocalityFilterEnum',
        'locality_sort' => '\MagDv\Cargomart\Dto\LocalitySortTypeEnum',
        'page' => 'string',
        'field_name' => 'string',
        'locality_code' => 'string',
        'locality_index' => 'int',
        'search_query' => 'string',
        'initial_locality_code' => 'string',
        'event_duration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'locality_filter' => null,
        'locality_sort' => null,
        'page' => null,
        'field_name' => null,
        'locality_code' => null,
        'locality_index' => null,
        'search_query' => null,
        'initial_locality_code' => null,
        'event_duration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'locality_filter' => false,
        'locality_sort' => false,
        'page' => false,
        'field_name' => false,
        'locality_code' => false,
        'locality_index' => false,
        'search_query' => false,
        'initial_locality_code' => false,
        'event_duration' => false
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
        'locality_filter' => 'localityFilter',
        'locality_sort' => 'localitySort',
        'page' => 'page',
        'field_name' => 'fieldName',
        'locality_code' => 'localityCode',
        'locality_index' => 'localityIndex',
        'search_query' => 'searchQuery',
        'initial_locality_code' => 'initialLocalityCode',
        'event_duration' => 'eventDuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locality_filter' => 'setLocalityFilter',
        'locality_sort' => 'setLocalitySort',
        'page' => 'setPage',
        'field_name' => 'setFieldName',
        'locality_code' => 'setLocalityCode',
        'locality_index' => 'setLocalityIndex',
        'search_query' => 'setSearchQuery',
        'initial_locality_code' => 'setInitialLocalityCode',
        'event_duration' => 'setEventDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locality_filter' => 'getLocalityFilter',
        'locality_sort' => 'getLocalitySort',
        'page' => 'getPage',
        'field_name' => 'getFieldName',
        'locality_code' => 'getLocalityCode',
        'locality_index' => 'getLocalityIndex',
        'search_query' => 'getSearchQuery',
        'initial_locality_code' => 'getInitialLocalityCode',
        'event_duration' => 'getEventDuration'
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
        $this->setIfExists('locality_filter', $data ?? [], null);
        $this->setIfExists('locality_sort', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('field_name', $data ?? [], null);
        $this->setIfExists('locality_code', $data ?? [], null);
        $this->setIfExists('locality_index', $data ?? [], null);
        $this->setIfExists('search_query', $data ?? [], null);
        $this->setIfExists('initial_locality_code', $data ?? [], null);
        $this->setIfExists('event_duration', $data ?? [], null);
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

        if ($this->container['locality_filter'] === null) {
            $invalidProperties[] = "'locality_filter' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
        }
        if ($this->container['field_name'] === null) {
            $invalidProperties[] = "'field_name' can't be null";
        }
        if ($this->container['locality_code'] === null) {
            $invalidProperties[] = "'locality_code' can't be null";
        }
        if ($this->container['locality_index'] === null) {
            $invalidProperties[] = "'locality_index' can't be null";
        }
        if ($this->container['event_duration'] === null) {
            $invalidProperties[] = "'event_duration' can't be null";
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
     * Gets locality_filter
     *
     * @return \MagDv\Cargomart\Dto\LocalityFilterEnum
     */
    public function getLocalityFilter()
    {
        return $this->container['locality_filter'];
    }

    /**
     * Sets locality_filter
     *
     * @param \MagDv\Cargomart\Dto\LocalityFilterEnum $locality_filter locality_filter
     *
     * @return self
     */
    public function setLocalityFilter($locality_filter)
    {
        if (is_null($locality_filter)) {
            throw new \InvalidArgumentException('non-nullable locality_filter cannot be null');
        }
        $this->container['locality_filter'] = $locality_filter;

        return $this;
    }

    /**
     * Gets locality_sort
     *
     * @return \MagDv\Cargomart\Dto\LocalitySortTypeEnum|null
     */
    public function getLocalitySort()
    {
        return $this->container['locality_sort'];
    }

    /**
     * Sets locality_sort
     *
     * @param \MagDv\Cargomart\Dto\LocalitySortTypeEnum|null $locality_sort locality_sort
     *
     * @return self
     */
    public function setLocalitySort($locality_sort)
    {
        if (is_null($locality_sort)) {
            throw new \InvalidArgumentException('non-nullable locality_sort cannot be null');
        }
        $this->container['locality_sort'] = $locality_sort;

        return $this;
    }

    /**
     * Gets page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param string $page Страница на которой выполняется событие
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Поле, которое заполняется
     *
     * @return self
     */
    public function setFieldName($field_name)
    {
        if (is_null($field_name)) {
            throw new \InvalidArgumentException('non-nullable field_name cannot be null');
        }
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets locality_code
     *
     * @return string
     */
    public function getLocalityCode()
    {
        return $this->container['locality_code'];
    }

    /**
     * Sets locality_code
     *
     * @param string $locality_code Код по КЛАДР выбранного пункта
     *
     * @return self
     */
    public function setLocalityCode($locality_code)
    {
        if (is_null($locality_code)) {
            throw new \InvalidArgumentException('non-nullable locality_code cannot be null');
        }
        $this->container['locality_code'] = $locality_code;

        return $this;
    }

    /**
     * Gets locality_index
     *
     * @return int
     */
    public function getLocalityIndex()
    {
        return $this->container['locality_index'];
    }

    /**
     * Sets locality_index
     *
     * @param int $locality_index Позиция выбранного пункта в списке
     *
     * @return self
     */
    public function setLocalityIndex($locality_index)
    {
        if (is_null($locality_index)) {
            throw new \InvalidArgumentException('non-nullable locality_index cannot be null');
        }
        $this->container['locality_index'] = $locality_index;

        return $this;
    }

    /**
     * Gets search_query
     *
     * @return string|null
     */
    public function getSearchQuery()
    {
        return $this->container['search_query'];
    }

    /**
     * Sets search_query
     *
     * @param string|null $search_query Строка поиска на момент выбора
     *
     * @return self
     */
    public function setSearchQuery($search_query)
    {
        if (is_null($search_query)) {
            throw new \InvalidArgumentException('non-nullable search_query cannot be null');
        }
        $this->container['search_query'] = $search_query;

        return $this;
    }

    /**
     * Gets initial_locality_code
     *
     * @return string|null
     */
    public function getInitialLocalityCode()
    {
        return $this->container['initial_locality_code'];
    }

    /**
     * Sets initial_locality_code
     *
     * @param string|null $initial_locality_code Строка поиска на момент фокуса
     *
     * @return self
     */
    public function setInitialLocalityCode($initial_locality_code)
    {
        if (is_null($initial_locality_code)) {
            throw new \InvalidArgumentException('non-nullable initial_locality_code cannot be null');
        }
        $this->container['initial_locality_code'] = $initial_locality_code;

        return $this;
    }

    /**
     * Gets event_duration
     *
     * @return int
     */
    public function getEventDuration()
    {
        return $this->container['event_duration'];
    }

    /**
     * Sets event_duration
     *
     * @param int $event_duration Время от получения фокуса на поле до выбора (в секундах)
     *
     * @return self
     */
    public function setEventDuration($event_duration)
    {
        if (is_null($event_duration)) {
            throw new \InvalidArgumentException('non-nullable event_duration cannot be null');
        }
        $this->container['event_duration'] = $event_duration;

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


