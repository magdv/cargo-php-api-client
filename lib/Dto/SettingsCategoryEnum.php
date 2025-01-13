<?php
/**
 * SettingsCategoryEnum
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
 * SettingsCategoryEnum Class Doc Comment
 *
 * @category Class
 * @description Категория
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingsCategoryEnum
{
    /**
     * Possible values of this enum
     */
    public const EMAIL = 'email';

    public const PROFILE = 'profile';

    public const SMS = 'sms';

    public const WEB_PUSH = 'webPush';

    public const MOBILE_PUSH = 'mobilePush';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EMAIL,
            self::PROFILE,
            self::SMS,
            self::WEB_PUSH,
            self::MOBILE_PUSH
        ];
    }
}


