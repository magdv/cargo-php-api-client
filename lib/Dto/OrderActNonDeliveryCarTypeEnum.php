<?php
/**
 * OrderActNonDeliveryCarTypeEnum
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
 * OrderActNonDeliveryCarTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип причины формирования акта
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderActNonDeliveryCarTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const THE_CAR_WAS_NOT_DELIVERED = 'the-car-was-not-delivered';

    public const NON_COMPLIANT_VEHICLE_DELIVERED = 'non-compliant-vehicle-delivered';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::THE_CAR_WAS_NOT_DELIVERED,
            self::NON_COMPLIANT_VEHICLE_DELIVERED
        ];
    }
}


