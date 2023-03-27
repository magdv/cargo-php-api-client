<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: worker/responses/worker-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Worker\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение карточки сотрудника
 * source: worker/responses/worker-response.json
 *
 * @property MessageV2[] $message
 * @property WorkerResponseData $data
 */
final class WorkerResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Worker\Responses\WorkerResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
