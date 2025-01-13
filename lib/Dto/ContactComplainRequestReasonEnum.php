<?php
/**
 * ContactComplainRequestReasonEnum
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
 * ContactComplainRequestReasonEnum Class Doc Comment
 *
 * @category Class
 * @description Причина
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactComplainRequestReasonEnum
{
    /**
     * Possible values of this enum
     */
    public const DO_NOT_ANSWER = 'DO_NOT_ANSWER';

    public const WRONG_PHONE = 'WRONG_PHONE';

    public const WRONG_PERSON = 'WRONG_PERSON';

    public const PERSON_DOES_NOT_WORK = 'PERSON_DOES_NOT_WORK';

    public const WRONG_EMAIL = 'WRONG_EMAIL';

    public const OTHER = 'OTHER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DO_NOT_ANSWER,
            self::WRONG_PHONE,
            self::WRONG_PERSON,
            self::PERSON_DOES_NOT_WORK,
            self::WRONG_EMAIL,
            self::OTHER
        ];
    }
}

