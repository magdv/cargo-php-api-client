<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные подписанта
 * source: expeditor-contract-updates/requests/expeditor-contract-updates-signer-request.json
 *
 * @property string $foundationDocument
 * @property ExpeditorContractUpdatesProxyRequest $proxy
 */
final class ExpeditorContractUpdatesSignerRequest extends AbstractEntity
{
    protected static $types = [
        'foundationDocument' => ['string'],
        'proxy' => ['Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests\ExpeditorContractUpdatesProxyRequest'],
    ];

    protected static $nullables = ['foundationDocument' => false, 'proxy' => false];
}
