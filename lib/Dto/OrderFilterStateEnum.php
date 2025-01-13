<?php
/**
 * OrderFilterStateEnum
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
 * OrderFilterStateEnum Class Doc Comment
 *
 * @category Class
 * @description Тип показываемого заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderFilterStateEnum
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'active';

    public const DRAFT = 'draft';

    public const MODERATION = 'moderation';

    public const WORKING = 'working';

    public const TEMPLATE = 'template';

    public const AUTOSAVE = 'autosave';

    public const COMPLETED = 'completed';

    public const SHIPPING = 'shipping';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::DRAFT,
            self::MODERATION,
            self::WORKING,
            self::TEMPLATE,
            self::AUTOSAVE,
            self::COMPLETED,
            self::SHIPPING
        ];
    }
}


