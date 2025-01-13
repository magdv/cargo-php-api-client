<?php
/**
 * EcnSbisStatusEnum
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
 * EcnSbisStatusEnum Class Doc Comment
 *
 * @category Class
 * @description Статус события в системе ЭДО СБИС (   passedByCarrier - Сдан перевозчиком,   transferredByConsignor - Передан грузоотправителем,   registered - Отправлен в ГИС ЭПД,   acceptedByCarrier - Принят перевозчиком,   rejectedByCarrier - Не принят перевозчиком,   acceptedByConsignee - Принят получателем,   rejectedByConsignee - Не принят получателем)
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EcnSbisStatusEnum
{
    /**
     * Possible values of this enum
     */
    public const TRANSFERRED_BY_CONSIGNOR = 'transferredByConsignor';

    public const REGISTERED = 'registered';

    public const ACCEPTED_BY_CARRIER = 'acceptedByCarrier';

    public const REJECTED_BY_CARRIER = 'rejectedByCarrier';

    public const ACCEPTED_BY_CONSIGNEE = 'acceptedByConsignee';

    public const REJECTED_BY_CONSIGNEE = 'rejectedByConsignee';

    public const PASSED_BY_CARRIER = 'passedByCarrier';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRANSFERRED_BY_CONSIGNOR,
            self::REGISTERED,
            self::ACCEPTED_BY_CARRIER,
            self::REJECTED_BY_CARRIER,
            self::ACCEPTED_BY_CONSIGNEE,
            self::REJECTED_BY_CONSIGNEE,
            self::PASSED_BY_CARRIER
        ];
    }
}

