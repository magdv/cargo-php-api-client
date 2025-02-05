<?php
/**
 * OrderPaymentTypeEnum
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
 * OrderPaymentTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип платежа в виде направления оплаты
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderPaymentTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const CONSIGNOR_CARRIER = 'consignorCarrier';

    public const GENERAL_PARTNER_CARRIER = 'generalPartnerCarrier';

    public const CONSIGNOR_GENERAL_PARTNER = 'consignorGeneralPartner';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONSIGNOR_CARRIER,
            self::GENERAL_PARTNER_CARRIER,
            self::CONSIGNOR_GENERAL_PARTNER
        ];
    }
}


