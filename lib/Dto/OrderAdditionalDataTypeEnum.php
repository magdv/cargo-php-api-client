<?php
/**
 * OrderAdditionalDataTypeEnum
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
use \MagDv\Cargomart\ObjectSerializer;

/**
 * OrderAdditionalDataTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Дополнительные сущности для order
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderAdditionalDataTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const PIN = 'pin';

    public const PROGRESS = 'progress';

    public const PROXY = 'proxy';

    public const TRUCK_DRIVER = 'truck-driver';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PIN,
            self::PROGRESS,
            self::PROXY,
            self::TRUCK_DRIVER
        ];
    }
}

