<?php
/**
 * ConfigurationSimpleSignatureStatusEnum
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
 * ConfigurationSimpleSignatureStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Статус простой подписи
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConfigurationSimpleSignatureStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'none';

    public const UNCONFIRMED = 'unconfirmed';

    public const ACTIVE = 'active';

    public const WITHDRAWN = 'withdrawn';

    public const REJECT = 'reject';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::UNCONFIRMED,
            self::ACTIVE,
            self::WITHDRAWN,
            self::REJECT
        ];
    }
}

