<?php
/**
 * ConfigurationExpeditorContractStatusEnum
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
 * ConfigurationExpeditorContractStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Статус договора с ООО Корса
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConfigurationExpeditorContractStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'none';

    public const ACTIVE = 'active';

    public const INACTIVE = 'inactive';

    public const CANCELED = 'canceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::ACTIVE,
            self::INACTIVE,
            self::CANCELED
        ];
    }
}


