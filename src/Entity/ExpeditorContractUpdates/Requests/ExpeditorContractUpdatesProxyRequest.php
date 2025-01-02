<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные доверенности
 * source: expeditor-contract-updates/requests/expeditor-contract-updates-proxy-request.json
 *
 * @property string $number
 * @property string $createDate
 * @property string $endDate
 * @property string $fileId
 */
final class ExpeditorContractUpdatesProxyRequest extends AbstractEntity
{
    protected static $types = [
        'number' => ['string'],
        'createDate' => ['string'],
        'endDate' => ['string'],
        'fileId' => ['string'],
    ];

    protected static $nullables = ['number' => false, 'createDate' => false, 'endDate' => false, 'fileId' => false];
}
