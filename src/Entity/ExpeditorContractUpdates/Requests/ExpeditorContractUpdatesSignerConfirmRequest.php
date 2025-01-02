<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для подтверждения подписанта
 * source: expeditor-contract-updates/requests/expeditor-contract-updates-signer-confirm-request.json
 *
 * @property string $code
 */
final class ExpeditorContractUpdatesSignerConfirmRequest extends AbstractEntity
{
    protected static $types = ['code' => ['string']];
    protected static $nullables = ['code' => false];
}
