<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные подписания доп. соглашения
 * source: expeditor-contract-updates/requests/expeditor-contract-updates-sign-request.json
 *
 * @property string $code
 */
final class ExpeditorContractUpdatesSignRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
