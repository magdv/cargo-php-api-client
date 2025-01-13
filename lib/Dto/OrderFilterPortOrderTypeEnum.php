<?php
/**
 * OrderFilterPortOrderTypeEnum
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
 * OrderFilterPortOrderTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип заказа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderFilterPortOrderTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const AUCTION = 'auction';

    public const AUCTION_NO_PRICE = 'auctionNoPrice';

    public const EXPRESS = 'express';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUCTION,
            self::AUCTION_NO_PRICE,
            self::EXPRESS
        ];
    }
}


