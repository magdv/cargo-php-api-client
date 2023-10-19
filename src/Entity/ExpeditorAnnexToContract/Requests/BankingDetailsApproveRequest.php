<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Уточнение статуса реквизитов
 * source: expeditor-annex-to-contract/requests/banking-details-approve-request.json
 *
 * @property int $approveStatus
 */
final class BankingDetailsApproveRequest extends AbstractEntity
{
    protected static $types = ['approveStatus' => ['int']];
    protected static $nullables = ['approveStatus' => false];
}
