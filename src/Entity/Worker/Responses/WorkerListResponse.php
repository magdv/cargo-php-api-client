<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/responses/worker-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение списка сотрудников
 * source: worker/responses/worker-list-response.json
 *
 * @property MessageV2[] $message
 * @property WorkerListResponseData $data
 */
final class WorkerListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Worker\Responses\WorkerListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
