<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Objects\ExpeditorTask;

/**
 * Список задач
 * source: expeditor/ExpeditorTask/responses/expeditor-task-list-response.json#/properties/data
 *
 * @property ExpeditorTask[] $tasks
 * @property Pagination $pagination
 */
final class ExpeditorTaskListResponseData extends AbstractEntity
{
    protected static $types = [
        'tasks' => ['array', 'Cargomart\ApiClient\Entity\Expeditor\ExpeditorTask\Objects\ExpeditorTask'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['tasks' => false, 'pagination' => false];
}
