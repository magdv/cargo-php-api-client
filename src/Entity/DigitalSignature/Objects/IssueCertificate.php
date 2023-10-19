<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\DigitalSignature\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * deprecated. Информация по выдаче сертификата сотруднику
 * source: digital-signature/objects/issue-certificate.json
 *
 * @property string $issueCertificateId
 * @property string $certificateId
 * @property string $status
 * @property string $rejectComment
 * @property string $role
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property Certificate $certificate
 */
final class IssueCertificate extends AbstractEntity
{
    protected static $types = [
        'issueCertificateId' => ['string'],
        'certificateId' => ['string'],
        'status' => ['string'],
        'rejectComment' => ['string'],
        'role' => ['string'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'certificate' => ['Cargomart\ApiClient\Entity\DigitalSignature\Objects\Certificate'],
    ];

    protected static $nullables = [
        'issueCertificateId' => false,
        'certificateId' => false,
        'status' => false,
        'rejectComment' => false,
        'role' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'certificate' => false,
    ];
}
