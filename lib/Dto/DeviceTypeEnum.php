<?php
/**
 * DeviceTypeEnum
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
 * DeviceTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип устройства
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeviceTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const APPLE = 'apple';

    public const ANDROID = 'android';

    public const WEB = 'web';

    public const HUAWEI = 'huawei';

    public const RUSTORE = 'rustore';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLE,
            self::ANDROID,
            self::WEB,
            self::HUAWEI,
            self::RUSTORE
        ];
    }
}


