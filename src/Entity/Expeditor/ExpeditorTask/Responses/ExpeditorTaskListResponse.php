<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список задач
 * source: expeditor/ExpeditorTask/responses/expeditor-task-list-response.json
 *
 * @property ExpeditorTaskListResponseData $data
 * @property MessageV2[] $message
 */
final class ExpeditorTaskListResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Responses\ExpeditorTaskListResponseData'],
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
    ];

    protected static $nullables = ['data' => false, 'message' => false];
}
