<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/requests/worker-certificate-create-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание сертификата ПЭП
 * source: worker/requests/worker-certificate-create-request.json
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $issuerCertificateId
 * @property string $verificationPhone
 * @property string $proxyType
 */
final class WorkerCertificateCreateRequest extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'issuerCertificateId' => ['string'],
        'verificationPhone' => ['string'],
        'proxyType' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'issuerCertificateId' => false,
        'verificationPhone' => false,
        'proxyType' => false,
    ];
}
