<?php
/**
 * ProtectedBidReason
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
 * ProtectedBidReason Class Doc Comment
 *
 * @category Class
 * @description Массив причин, по которым нельзя поставить ставку. (1- аноним, 2- не валидированный, 3- не партнер, 4- в черном списке (либо доступно только белому списку), 5- Не является партнером ГП, 6- у партнера не заключен контракт, 7- В черном списке компании, 8 - нет партнера и нет контракта, 9 - не одобрен запрос доступа в компанию, 10 - не заданы банк. реквизиты для перевозчика в эксп. заказе, 11 - не активные или не аткуальные банк. ревизиты для перевозчика в эксп. заказе), 12 - нет договора с экспедитором(но можно его заключить), 13 - нет действующей ПЭП, 14 - текущий договор с экспедитором заблокирован, 15 - нет договора с экспедитором и его заключить нельзя, 16 - запрещено брать заявку без наличия ЭТРН, 17 - Отсутствуют актуальные комм. условия (РФ или международные)
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProtectedBidReason
{
    /**
     * Possible values of this enum
     */
    public const NUMBER_1 = 1;

    public const NUMBER_2 = 2;

    public const NUMBER_3 = 3;

    public const NUMBER_4 = 4;

    public const NUMBER_5 = 5;

    public const NUMBER_6 = 6;

    public const NUMBER_7 = 7;

    public const NUMBER_8 = 8;

    public const NUMBER_9 = 9;

    public const NUMBER_10 = 10;

    public const NUMBER_11 = 11;

    public const NUMBER_12 = 12;

    public const NUMBER_13 = 13;

    public const NUMBER_14 = 14;

    public const NUMBER_15 = 15;

    public const NUMBER_16 = 16;

    public const NUMBER_17 = 17;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NUMBER_1,
            self::NUMBER_2,
            self::NUMBER_3,
            self::NUMBER_4,
            self::NUMBER_5,
            self::NUMBER_6,
            self::NUMBER_7,
            self::NUMBER_8,
            self::NUMBER_9,
            self::NUMBER_10,
            self::NUMBER_11,
            self::NUMBER_12,
            self::NUMBER_13,
            self::NUMBER_14,
            self::NUMBER_15,
            self::NUMBER_16,
            self::NUMBER_17
        ];
    }
}


