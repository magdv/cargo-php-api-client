<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Карточка задачи
 * source: expeditor/ExpeditorTask/responses/expeditor-task-response.json
 *
 * @property ExpeditorTaskResponseData $data
 */
final class ExpeditorTaskResponse extends AbstractEntity
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Responses\ExpeditorTaskResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
