<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение карточки сотрудника
 * source: worker/responses/worker-response.json
 *
 * @property WorkerResponseData $data
 * @property MessageV2[] $message
 */
final class WorkerResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
