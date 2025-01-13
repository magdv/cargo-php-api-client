<?php
/**
 * SignedDocumentTitleTypeEnum
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
 * SignedDocumentTitleTypeEnum Class Doc Comment
 *
 * @category Class
 * @description Тип титула подписанного документа
 * @package  MagDv\Cargomart
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignedDocumentTitleTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const EXPEDITOR_ASSIGNMENT_EXPEDITOR_TITLE = 'expeditorAssignment.expeditorTitle';

    public const EXPEDITOR_ASSIGNMENT_CUSTOMER_TITLE = 'expeditorAssignment.customerTitle';

    public const EXPEDITOR_ASSIGNMENT_CANCEL_TITLE = 'expeditorAssignment.cancelTitle';

    public const REQUEST_ASSIGNMENT_EXPEDITOR_TITLE = 'requestAssignment.expeditorTitle';

    public const REQUEST_ASSIGNMENT_CARRIER_TITLE_TAKE_ORDER = 'requestAssignment.carrierTitleTakeOrder';

    public const REQUEST_ASSIGNMENT_CARRIER_TITLE_ATTACH_TRUCK_DRIVER = 'requestAssignment.carrierTitleAttachTruckDriver';

    public const REQUEST_ASSIGNMENT_CANCEL_TITLE = 'requestAssignment.cancelTitle';

    public const CANCEL_TRUCK_DRIVER_ASSIGNMENT_CARRIER_TITLE = 'cancelTruckDriverAssignment.carrierTitle';

    public const CANCEL_TRUCK_DRIVER_ASSIGNMENT_EXPEDITOR_TITLE = 'cancelTruckDriverAssignment.expeditorTitle';

    public const CHANGE_TRUCK_DRIVER_ASSIGNMENT_EXPEDITOR_TITLE = 'changeTruckDriverAssignment.expeditorTitle';

    public const CHANGE_TRUCK_DRIVER_ASSIGNMENT_CUSTOMER_TITLE = 'changeTruckDriverAssignment.customerTitle';

    public const EXPEDITOR_ASSIGNMENT_CANCELLATION_EXPEDITOR_TITLE = 'expeditorAssignmentCancellation.expeditorTitle';

    public const EXPEDITOR_ASSIGNMENT_CANCELLATION_CUSTOMER_TITLE = 'expeditorAssignmentCancellation.customerTitle';

    public const REQUEST_ASSIGNMENT_CANCELLATION_EXPEDITOR_TITLE = 'requestAssignmentCancellation.expeditorTitle';

    public const REQUEST_ASSIGNMENT_CANCELLATION_CARRIER_TITLE = 'requestAssignmentCancellation.carrierTitle';

    public const ACT_NON_DELIVERY_CAR_CUSTOMER_TITLE = 'actNonDeliveryCar.customerTitle';

    public const ACT_NON_DELIVERY_CAR_CANCEL_TITLE = 'actNonDeliveryCar.cancelTitle';

    public const ANNEX_TO_CONTRACT_BANKING_DETAILS = 'annexToContract.bankingDetails';

    public const CERTIFICATE_ISSUE_TITLE = 'certificate.issueTitle';

    public const CERTIFICATE_REVOKE_TITLE = 'certificate.revokeTitle';

    public const CLAIM_DOWNTIME_CARRIER_EXPEDITOR_CLAIMANT_TITLE = 'claimDowntimeCarrierExpeditor.claimantTitle';

    public const CLAIM_DOWNTIME_EXPEDITOR_CONSIGNOR_CLAIMANT_TITLE = 'claimDowntimeExpeditorConsignor.claimantTitle';

    public const CLAIM_RESPONSE_DOWNTIME_CARRIER_EXPEDITOR_RESPONDENT_TITLE = 'claimResponseDowntimeCarrierExpeditor.respondentTitle';

    public const CLAIM_RESPONSE_DOWNTIME_EXPEDITOR_CONSIGNOR_RESPONDENT_TITLE = 'claimResponseDowntimeExpeditorConsignor.respondentTitle';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXPEDITOR_ASSIGNMENT_EXPEDITOR_TITLE,
            self::EXPEDITOR_ASSIGNMENT_CUSTOMER_TITLE,
            self::EXPEDITOR_ASSIGNMENT_CANCEL_TITLE,
            self::REQUEST_ASSIGNMENT_EXPEDITOR_TITLE,
            self::REQUEST_ASSIGNMENT_CARRIER_TITLE_TAKE_ORDER,
            self::REQUEST_ASSIGNMENT_CARRIER_TITLE_ATTACH_TRUCK_DRIVER,
            self::REQUEST_ASSIGNMENT_CANCEL_TITLE,
            self::CANCEL_TRUCK_DRIVER_ASSIGNMENT_CARRIER_TITLE,
            self::CANCEL_TRUCK_DRIVER_ASSIGNMENT_EXPEDITOR_TITLE,
            self::CHANGE_TRUCK_DRIVER_ASSIGNMENT_EXPEDITOR_TITLE,
            self::CHANGE_TRUCK_DRIVER_ASSIGNMENT_CUSTOMER_TITLE,
            self::EXPEDITOR_ASSIGNMENT_CANCELLATION_EXPEDITOR_TITLE,
            self::EXPEDITOR_ASSIGNMENT_CANCELLATION_CUSTOMER_TITLE,
            self::REQUEST_ASSIGNMENT_CANCELLATION_EXPEDITOR_TITLE,
            self::REQUEST_ASSIGNMENT_CANCELLATION_CARRIER_TITLE,
            self::ACT_NON_DELIVERY_CAR_CUSTOMER_TITLE,
            self::ACT_NON_DELIVERY_CAR_CANCEL_TITLE,
            self::ANNEX_TO_CONTRACT_BANKING_DETAILS,
            self::CERTIFICATE_ISSUE_TITLE,
            self::CERTIFICATE_REVOKE_TITLE,
            self::CLAIM_DOWNTIME_CARRIER_EXPEDITOR_CLAIMANT_TITLE,
            self::CLAIM_DOWNTIME_EXPEDITOR_CONSIGNOR_CLAIMANT_TITLE,
            self::CLAIM_RESPONSE_DOWNTIME_CARRIER_EXPEDITOR_RESPONDENT_TITLE,
            self::CLAIM_RESPONSE_DOWNTIME_EXPEDITOR_CONSIGNOR_RESPONDENT_TITLE
        ];
    }
}


