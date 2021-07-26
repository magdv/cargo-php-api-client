<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запустить выдачу сертификата
 * source: worker/requests/worker-issue-certificate-request.json
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $verificationPhone
 * @property string $simpleSignatureRole
 */
final class WorkerIssueCertificateRequest extends AbstractEntity
{
    protected static $types = [
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'verificationPhone' => ['string'],
        'simpleSignatureRole' => ['string'],
    ];

    protected static $nullables = [
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'verificationPhone' => false,
        'simpleSignatureRole' => false,
    ];
}
