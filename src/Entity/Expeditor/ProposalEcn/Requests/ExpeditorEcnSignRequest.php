<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalEcn\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные подписи ЭТРН
 * source: expeditor/ProposalEcn/requests/expeditor-ecn-sign-request.json
 *
 * @property string $sign
 * @property string $thumbprint
 * @property string $name
 * @property string $serial
 * @property string $issuerName
 * @property string $subjectName
 * @property string $validFrom
 * @property string $validTo
 */
final class ExpeditorEcnSignRequest extends AbstractEntity
{
    protected static $types = [
        'sign' => ['string'],
        'thumbprint' => ['string'],
        'name' => ['string'],
        'serial' => ['string'],
        'issuerName' => ['string'],
        'subjectName' => ['string'],
        'validFrom' => ['string'],
        'validTo' => ['string'],
    ];

    protected static $nullables = [
        'sign' => false,
        'thumbprint' => false,
        'name' => false,
        'serial' => false,
        'issuerName' => false,
        'subjectName' => false,
        'validFrom' => false,
        'validTo' => false,
    ];
}
