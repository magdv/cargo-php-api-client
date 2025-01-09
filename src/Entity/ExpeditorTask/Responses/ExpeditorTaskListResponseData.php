<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorTask\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\ExpeditorTask\Objects\ExpeditorTask;

/**
 * Список задач
 * source: expeditor-task/responses/expeditor-task-list-response.json#/properties/data
 *
 * @property ExpeditorTask[] $tasks
 * @property Pagination $pagination
 */
final class ExpeditorTaskListResponseData extends AbstractEntity
{
    protected static $types = [
        'tasks' => ['array', 'Cargomart\ApiClient\Entity\ExpeditorTask\Objects\ExpeditorTask'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['tasks' => false, 'pagination' => false];
}
