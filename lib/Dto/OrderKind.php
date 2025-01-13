<?php
/**
 * OrderKind
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
 * OrderKind Class Doc Comment
 *
 * @category Class
 * @description Класс заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderKind
{
    /**
     * Possible values of this enum
     */
    public const FTL = 'ftl';

    public const FTL_DRAFT = 'ftl-draft';

    public const PROJECT = 'project';

    public const OFFER = 'offer';

    public const EXPEDITOR_DRAFT = 'expeditor-draft';

    public const EXPEDITOR = 'expeditor';

    public const EXPEDITOR_CARRIER = 'expeditor-carrier';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FTL,
            self::FTL_DRAFT,
            self::PROJECT,
            self::OFFER,
            self::EXPEDITOR_DRAFT,
            self::EXPEDITOR,
            self::EXPEDITOR_CARRIER
        ];
    }
}


