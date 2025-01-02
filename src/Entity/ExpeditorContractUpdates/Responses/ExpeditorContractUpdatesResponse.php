<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с состоянием обновления договора с экспедитором
 * source: expeditor-contract-updates/responses/expeditor-contract-updates-response.json
 *
 * @property ExpeditorContractUpdatesResponseData $data
 * @property MessageV2[] $message
 */
final class ExpeditorContractUpdatesResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Responses\ExpeditorContractUpdatesResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
