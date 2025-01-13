<?php
/**
 * ProposalOrderRefuseTypeEnum
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
 * ProposalOrderRefuseTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип отказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProposalOrderRefuseTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const CONSIGNOR = 'consignor';

    public const CARRIER = 'carrier';

    public const EXPEDITOR = 'expeditor';

    public const EXPEDITOR_CARRIER = 'expeditor-carrier';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONSIGNOR,
            self::CARRIER,
            self::EXPEDITOR,
            self::EXPEDITOR_CARRIER
        ];
    }
}

