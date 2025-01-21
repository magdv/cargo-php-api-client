<?php
/**
 * EcnAdditionalData
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
 * EcnAdditionalData Class Doc Comment
 *
 * @category Class
 * @description Данные для генерации накладной
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EcnAdditionalData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcnAdditionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\MagDv\Cargomart\Dto\EcnType',
        'external_number' => 'string',
        'operator' => '\MagDv\Cargomart\Dto\EcnOperatorEnum',
        'point_index_from' => 'int',
        'point_index_to' => 'int',
        'cargo_condition' => 'string',
        'packing_method' => 'string',
        'container_type' => 'string',
        'packages_number' => 'int',
        'weight' => '\MagDv\Cargomart\Dto\WaybillWeight',
        'arrival' => '\MagDv\Cargomart\Dto\WaybillDate',
        'departure' => '\MagDv\Cargomart\Dto\WaybillDate',
        'documents' => '\MagDv\Cargomart\Dto\EcnAdditionalDataDocuments',
        'loader_person' => '\MagDv\Cargomart\Dto\EcnAdditionalDataLoaderPerson',
        'consignor_mark' => '\MagDv\Cargomart\Dto\ConsignorMarkEnum',
        'mark_comment' => 'string',
        'notify_params' => '\MagDv\Cargomart\Dto\NotifyParamItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'external_number' => null,
        'operator' => null,
        'point_index_from' => null,
        'point_index_to' => null,
        'cargo_condition' => null,
        'packing_method' => null,
        'container_type' => null,
        'packages_number' => null,
        'weight' => null,
        'arrival' => null,
        'departure' => null,
        'documents' => null,
        'loader_person' => null,
        'consignor_mark' => null,
        'mark_comment' => null,
        'notify_params' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'external_number' => false,
        'operator' => false,
        'point_index_from' => false,
        'point_index_to' => false,
        'cargo_condition' => false,
        'packing_method' => false,
        'container_type' => false,
        'packages_number' => false,
        'weight' => false,
        'arrival' => false,
        'departure' => false,
        'documents' => false,
        'loader_person' => false,
        'consignor_mark' => false,
        'mark_comment' => false,
        'notify_params' => false
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
        'type' => 'type',
        'external_number' => 'externalNumber',
        'operator' => 'operator',
        'point_index_from' => 'pointIndexFrom',
        'point_index_to' => 'pointIndexTo',
        'cargo_condition' => 'cargoCondition',
        'packing_method' => 'packingMethod',
        'container_type' => 'containerType',
        'packages_number' => 'packagesNumber',
        'weight' => 'weight',
        'arrival' => 'arrival',
        'departure' => 'departure',
        'documents' => 'documents',
        'loader_person' => 'loaderPerson',
        'consignor_mark' => 'consignorMark',
        'mark_comment' => 'markComment',
        'notify_params' => 'notifyParams'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'external_number' => 'setExternalNumber',
        'operator' => 'setOperator',
        'point_index_from' => 'setPointIndexFrom',
        'point_index_to' => 'setPointIndexTo',
        'cargo_condition' => 'setCargoCondition',
        'packing_method' => 'setPackingMethod',
        'container_type' => 'setContainerType',
        'packages_number' => 'setPackagesNumber',
        'weight' => 'setWeight',
        'arrival' => 'setArrival',
        'departure' => 'setDeparture',
        'documents' => 'setDocuments',
        'loader_person' => 'setLoaderPerson',
        'consignor_mark' => 'setConsignorMark',
        'mark_comment' => 'setMarkComment',
        'notify_params' => 'setNotifyParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'external_number' => 'getExternalNumber',
        'operator' => 'getOperator',
        'point_index_from' => 'getPointIndexFrom',
        'point_index_to' => 'getPointIndexTo',
        'cargo_condition' => 'getCargoCondition',
        'packing_method' => 'getPackingMethod',
        'container_type' => 'getContainerType',
        'packages_number' => 'getPackagesNumber',
        'weight' => 'getWeight',
        'arrival' => 'getArrival',
        'departure' => 'getDeparture',
        'documents' => 'getDocuments',
        'loader_person' => 'getLoaderPerson',
        'consignor_mark' => 'getConsignorMark',
        'mark_comment' => 'getMarkComment',
        'notify_params' => 'getNotifyParams'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('external_number', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('point_index_from', $data ?? [], null);
        $this->setIfExists('point_index_to', $data ?? [], null);
        $this->setIfExists('cargo_condition', $data ?? [], null);
        $this->setIfExists('packing_method', $data ?? [], null);
        $this->setIfExists('container_type', $data ?? [], null);
        $this->setIfExists('packages_number', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('arrival', $data ?? [], null);
        $this->setIfExists('departure', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('loader_person', $data ?? [], null);
        $this->setIfExists('consignor_mark', $data ?? [], null);
        $this->setIfExists('mark_comment', $data ?? [], null);
        $this->setIfExists('notify_params', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['point_index_from'] === null) {
            $invalidProperties[] = "'point_index_from' can't be null";
        }
        if ($this->container['point_index_to'] === null) {
            $invalidProperties[] = "'point_index_to' can't be null";
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
     * Gets type
     *
     * @return \MagDv\Cargomart\Dto\EcnType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \MagDv\Cargomart\Dto\EcnType $type type
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
     * Gets external_number
     *
     * @return string|null
     */
    public function getExternalNumber()
    {
        return $this->container['external_number'];
    }

    /**
     * Sets external_number
     *
     * @param string|null $external_number Внешний номер ТРН
     *
     * @return self
     */
    public function setExternalNumber($external_number)
    {
        if (is_null($external_number)) {
            throw new \InvalidArgumentException('non-nullable external_number cannot be null');
        }
        $this->container['external_number'] = $external_number;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return \MagDv\Cargomart\Dto\EcnOperatorEnum|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param \MagDv\Cargomart\Dto\EcnOperatorEnum|null $operator operator
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets point_index_from
     *
     * @return int
     */
    public function getPointIndexFrom()
    {
        return $this->container['point_index_from'];
    }

    /**
     * Sets point_index_from
     *
     * @param int $point_index_from Индекс пункта погрузки из маршрута
     *
     * @return self
     */
    public function setPointIndexFrom($point_index_from)
    {
        if (is_null($point_index_from)) {
            throw new \InvalidArgumentException('non-nullable point_index_from cannot be null');
        }
        $this->container['point_index_from'] = $point_index_from;

        return $this;
    }

    /**
     * Gets point_index_to
     *
     * @return int
     */
    public function getPointIndexTo()
    {
        return $this->container['point_index_to'];
    }

    /**
     * Sets point_index_to
     *
     * @param int $point_index_to Индекс пункта выгрузки из маршрута
     *
     * @return self
     */
    public function setPointIndexTo($point_index_to)
    {
        if (is_null($point_index_to)) {
            throw new \InvalidArgumentException('non-nullable point_index_to cannot be null');
        }
        $this->container['point_index_to'] = $point_index_to;

        return $this;
    }

    /**
     * Gets cargo_condition
     *
     * @return string|null
     */
    public function getCargoCondition()
    {
        return $this->container['cargo_condition'];
    }

    /**
     * Sets cargo_condition
     *
     * @param string|null $cargo_condition Состояние груза
     *
     * @return self
     */
    public function setCargoCondition($cargo_condition)
    {
        if (is_null($cargo_condition)) {
            throw new \InvalidArgumentException('non-nullable cargo_condition cannot be null');
        }
        $this->container['cargo_condition'] = $cargo_condition;

        return $this;
    }

    /**
     * Gets packing_method
     *
     * @return string|null
     */
    public function getPackingMethod()
    {
        return $this->container['packing_method'];
    }

    /**
     * Sets packing_method
     *
     * @param string|null $packing_method Способ упаковки
     *
     * @return self
     */
    public function setPackingMethod($packing_method)
    {
        if (is_null($packing_method)) {
            throw new \InvalidArgumentException('non-nullable packing_method cannot be null');
        }
        $this->container['packing_method'] = $packing_method;

        return $this;
    }

    /**
     * Gets container_type
     *
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string|null $container_type Вид тары
     *
     * @return self
     */
    public function setContainerType($container_type)
    {
        if (is_null($container_type)) {
            throw new \InvalidArgumentException('non-nullable container_type cannot be null');
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets packages_number
     *
     * @return int|null
     */
    public function getPackagesNumber()
    {
        return $this->container['packages_number'];
    }

    /**
     * Sets packages_number
     *
     * @param int|null $packages_number Количество грузовых мест
     *
     * @return self
     */
    public function setPackagesNumber($packages_number)
    {
        if (is_null($packages_number)) {
            throw new \InvalidArgumentException('non-nullable packages_number cannot be null');
        }
        $this->container['packages_number'] = $packages_number;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \MagDv\Cargomart\Dto\WaybillWeight|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \MagDv\Cargomart\Dto\WaybillWeight|null $weight Вес
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets arrival
     *
     * @return \MagDv\Cargomart\Dto\WaybillDate|null
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param \MagDv\Cargomart\Dto\WaybillDate|null $arrival Прибытие
     *
     * @return self
     */
    public function setArrival($arrival)
    {
        if (is_null($arrival)) {
            throw new \InvalidArgumentException('non-nullable arrival cannot be null');
        }
        $this->container['arrival'] = $arrival;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return \MagDv\Cargomart\Dto\WaybillDate|null
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param \MagDv\Cargomart\Dto\WaybillDate|null $departure Отправление
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        if (is_null($departure)) {
            throw new \InvalidArgumentException('non-nullable departure cannot be null');
        }
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \MagDv\Cargomart\Dto\EcnAdditionalDataDocuments|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \MagDv\Cargomart\Dto\EcnAdditionalDataDocuments|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets loader_person
     *
     * @return \MagDv\Cargomart\Dto\EcnAdditionalDataLoaderPerson|null
     */
    public function getLoaderPerson()
    {
        return $this->container['loader_person'];
    }

    /**
     * Sets loader_person
     *
     * @param \MagDv\Cargomart\Dto\EcnAdditionalDataLoaderPerson|null $loader_person loader_person
     *
     * @return self
     */
    public function setLoaderPerson($loader_person)
    {
        if (is_null($loader_person)) {
            throw new \InvalidArgumentException('non-nullable loader_person cannot be null');
        }
        $this->container['loader_person'] = $loader_person;

        return $this;
    }

    /**
     * Gets consignor_mark
     *
     * @return \MagDv\Cargomart\Dto\ConsignorMarkEnum|null
     */
    public function getConsignorMark()
    {
        return $this->container['consignor_mark'];
    }

    /**
     * Sets consignor_mark
     *
     * @param \MagDv\Cargomart\Dto\ConsignorMarkEnum|null $consignor_mark consignor_mark
     *
     * @return self
     */
    public function setConsignorMark($consignor_mark)
    {
        if (is_null($consignor_mark)) {
            throw new \InvalidArgumentException('non-nullable consignor_mark cannot be null');
        }
        $this->container['consignor_mark'] = $consignor_mark;

        return $this;
    }

    /**
     * Gets mark_comment
     *
     * @return string|null
     */
    public function getMarkComment()
    {
        return $this->container['mark_comment'];
    }

    /**
     * Sets mark_comment
     *
     * @param string|null $mark_comment Комментарий к отметке
     *
     * @return self
     */
    public function setMarkComment($mark_comment)
    {
        if (is_null($mark_comment)) {
            throw new \InvalidArgumentException('non-nullable mark_comment cannot be null');
        }
        $this->container['mark_comment'] = $mark_comment;

        return $this;
    }

    /**
     * Gets notify_params
     *
     * @return \MagDv\Cargomart\Dto\NotifyParamItem[]|null
     */
    public function getNotifyParams()
    {
        return $this->container['notify_params'];
    }

    /**
     * Sets notify_params
     *
     * @param \MagDv\Cargomart\Dto\NotifyParamItem[]|null $notify_params Список параметров для рассылки уведомлений по ЭТРН
     *
     * @return self
     */
    public function setNotifyParams($notify_params)
    {
        if (is_null($notify_params)) {
            throw new \InvalidArgumentException('non-nullable notify_params cannot be null');
        }
        $this->container['notify_params'] = $notify_params;

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


