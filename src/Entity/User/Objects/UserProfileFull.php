<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyInfo;
use Cargomart\ApiClient\Entity\Company\Objects\PersonalManager;
use Cargomart\ApiClient\Entity\DigitalSignature\Objects\IssueCertificate;

/**
 * Профиль пользователя
 * source: user/objects/user-profile-full.json
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $position
 * @property string $email
 * @property string $contactEmail
 * @property string $contactEmailStatus
 * @property string $contactEmailResendCodeAfterDate
 * @property string $contactEmailConfirmBeforeDate
 * @property string $phone
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $emailUnConfirmed
 * @property string $emailConfirmBeforeDate
 * @property string $phoneUnConfirmed
 * @property string $phoneConfirmBeforeDate
 * @property string $timezone
 * @property string $role
 * @property int $roleId
 * @property bool $isBlocked
 * @property bool $lockedProfile
 * @property bool $isValidated
 * @property int $legalStatusId
 * @property bool $isHaveBid
 * @property bool $isHaveGeneralPartner
 * @property int $delaySendSms
 * @property int $delaySendEmail
 * @property CompanyInfo $company
 * @property UserAccess $access
 * @property PersonalManager[] $personalManager
 * @property IssueCertificate $issueCertificate
 * @property ValueWithCodeVerification $simpleSignaturePhoneVerification
 */
final class UserProfileFull extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'email' => ['string'],
        'contactEmail' => ['string'],
        'contactEmailStatus' => ['string'],
        'contactEmailResendCodeAfterDate' => ['string'],
        'contactEmailConfirmBeforeDate' => ['string'],
        'phone' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'emailUnConfirmed' => ['string'],
        'emailConfirmBeforeDate' => ['string'],
        'phoneUnConfirmed' => ['string'],
        'phoneConfirmBeforeDate' => ['string'],
        'timezone' => ['string'],
        'role' => ['string'],
        'roleId' => ['int'],
        'isBlocked' => ['bool'],
        'lockedProfile' => ['bool'],
        'isValidated' => ['bool'],
        'legalStatusId' => ['int'],
        'isHaveBid' => ['bool'],
        'isHaveGeneralPartner' => ['bool'],
        'delaySendSms' => ['int'],
        'delaySendEmail' => ['int'],
        'company' => ['Cargomart\ApiClient\Entity\Company\Objects\CompanyInfo'],
        'access' => ['Cargomart\ApiClient\Entity\User\Objects\UserAccess'],
        'personalManager' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\PersonalManager'],
        'issueCertificate' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\IssueCertificate'],
        'simpleSignaturePhoneVerification' => ['Cargomart\ApiClient\Entity\User\Objects\ValueWithCodeVerification'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'position' => false,
        'email' => false,
        'contactEmail' => false,
        'contactEmailStatus' => false,
        'contactEmailResendCodeAfterDate' => false,
        'contactEmailConfirmBeforeDate' => false,
        'phone' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'emailUnConfirmed' => false,
        'emailConfirmBeforeDate' => false,
        'phoneUnConfirmed' => false,
        'phoneConfirmBeforeDate' => false,
        'timezone' => false,
        'role' => false,
        'roleId' => false,
        'isBlocked' => false,
        'lockedProfile' => false,
        'isValidated' => false,
        'legalStatusId' => false,
        'isHaveBid' => false,
        'isHaveGeneralPartner' => false,
        'delaySendSms' => false,
        'delaySendEmail' => false,
        'company' => false,
        'access' => false,
        'personalManager' => false,
        'issueCertificate' => false,
        'simpleSignaturePhoneVerification' => false,
    ];
}
