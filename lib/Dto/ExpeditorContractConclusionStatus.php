<?php
/**
 * ExpeditorContractConclusionStatus
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
 * ExpeditorContractConclusionStatus Class Doc Comment
 *
 * @category Class
 * @description Текущий статус заключения договора
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpeditorContractConclusionStatus
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'none';

    public const KONTUR_WAIT = 'kontur-wait';

    public const KONTUR_VALIDATE = 'kontur-validate';

    public const KONTUR_VALIDATE_ERROR = 'kontur-validate-error';

    public const KONTUR_INVALID = 'kontur-invalid';

    public const CONTRACT_INFO_SET = 'contract-info-set';

    public const SIGNER_DATA_SET = 'signer-data-set';

    public const ISSUE_CERTIFICATE_DATA_SET = 'issue-certificate-data-set';

    public const CONTRACT_GENERATE = 'contract-generate';

    public const SIGNING_METHOD_SET = 'signing-method-set';

    public const SIGNING_WAITING = 'signing-waiting';

    public const SIGNING_FINISHED = 'signing-finished';

    public const SIGNING_REFUSE = 'signing-refuse';

    public const MODERATION_REFUSE = 'moderation-refuse';

    public const INACTIVE = 'inactive';

    public const CANCELLED = 'cancelled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::KONTUR_WAIT,
            self::KONTUR_VALIDATE,
            self::KONTUR_VALIDATE_ERROR,
            self::KONTUR_INVALID,
            self::CONTRACT_INFO_SET,
            self::SIGNER_DATA_SET,
            self::ISSUE_CERTIFICATE_DATA_SET,
            self::CONTRACT_GENERATE,
            self::SIGNING_METHOD_SET,
            self::SIGNING_WAITING,
            self::SIGNING_FINISHED,
            self::SIGNING_REFUSE,
            self::MODERATION_REFUSE,
            self::INACTIVE,
            self::CANCELLED
        ];
    }
}

