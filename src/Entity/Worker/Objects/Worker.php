<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/objects/worker.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\DigitalSignature\Objects\IssueCertificate;
use Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateShort;
use Cargomart\ApiClient\Entity\User\Objects\ValueWithCodeVerification;

/**
 * Сотрудник
 * source: worker/objects/worker.json
 *
 * @property int $id
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $email
 * @property string $phone
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $contactEmail
 * @property string $contactEmailStatus
 * @property string $position
 * @property int $roleId
 * @property bool $isBlocked
 * @property string $timezone
 * @property string $inviteStatus
 * @property IssueCertificate $issueCertificate
 * @property ValueWithCodeVerification $simpleSignaturePhoneVerification
 * @property UserCertificateShort[] $certificate
 * @property string $inviteExpireDate
 * @property bool $lockedProfile
 * @property WorkerAccess $access
 */
final class Worker extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'phone' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'contactEmail' => ['string'],
        'contactEmailStatus' => ['string'],
        'position' => ['string'],
        'roleId' => ['int'],
        'isBlocked' => ['bool'],
        'timezone' => ['string'],
        'inviteStatus' => ['string'],
        'issueCertificate' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\IssueCertificate'],
        'simpleSignaturePhoneVerification' => ['Cargomart\ApiClient\Entity\User\Objects\ValueWithCodeVerification'],
        'certificate' => ['array', 'Cargomart\ApiClient\Entity\DigitalSignature\Objects\UserCertificateShort'],
        'inviteExpireDate' => ['string'],
        'lockedProfile' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Worker\Objects\WorkerAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'email' => false,
        'phone' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'contactEmail' => false,
        'contactEmailStatus' => false,
        'position' => false,
        'roleId' => false,
        'isBlocked' => false,
        'timezone' => false,
        'inviteStatus' => false,
        'issueCertificate' => false,
        'simpleSignaturePhoneVerification' => false,
        'certificate' => false,
        'inviteExpireDate' => false,
        'lockedProfile' => false,
        'access' => false,
    ];
}
