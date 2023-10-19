<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос перехода процесса заключения договора в определенный статус
 * source: expeditor-contract-conclusion/requests/expeditor-contract-conclusion-status-request.json
 *
 * @property string $status
 */
final class ExpeditorContractConclusionStatusRequest extends AbstractEntity
{
    protected static $types = ['status' => ['string']];
    protected static $nullables = ['status' => false];
}
