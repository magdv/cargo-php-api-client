<?php
/**
 * MessageTypeEnum
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
 * MessageTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип api сообщения
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MessageTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const ERROR = 'error';

    public const WARNING = 'warning';

    public const DEBUG = 'debug';

    public const INFO = 'info';

    public const SUCCESS = 'success';

    public const LOG = 'log';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ERROR,
            self::WARNING,
            self::DEBUG,
            self::INFO,
            self::SUCCESS,
            self::LOG
        ];
    }
}


