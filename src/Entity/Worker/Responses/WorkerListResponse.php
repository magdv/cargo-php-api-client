<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Получение списка сотрудников
 * source: worker/responses/worker-list-response.json
 *
 * @property WorkerListResponseData $data
 */
final class WorkerListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Worker\Responses\WorkerListResponseData']];
    protected static $nullables = ['data' => false];
}
