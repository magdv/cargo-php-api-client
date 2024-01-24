<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Получение карточки сотрудника
 * source: worker/responses/worker-response.json
 *
 * @property WorkerResponseData $data
 */
final class WorkerResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponseData']];
    protected static $nullables = ['data' => false];
}
