<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные пользователя для генерации подписи доверенности
 * source: expeditor/requests/proposal-proxy-request.json
 *
 * @property string $name
 * @property string $serial
 * @property string $issuerName
 * @property string $subjectName
 * @property string $thumbprint
 * @property string $validFrom
 * @property string $validTo
 */
final class ProposalProxyRequest extends AbstractEntity
{
    protected static $types = [
        'name' => ['string'],
        'serial' => ['string'],
        'issuerName' => ['string'],
        'subjectName' => ['string'],
        'thumbprint' => ['string'],
        'validFrom' => ['string'],
        'validTo' => ['string'],
    ];

    protected static $nullables = [
        'name' => false,
        'serial' => false,
        'issuerName' => false,
        'subjectName' => false,
        'thumbprint' => false,
        'validFrom' => false,
        'validTo' => false,
    ];
}
