<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorTask\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\ExpeditorTask\Objects\ExpeditorTask;

/**
 * source: expeditor-task/responses/expeditor-task-response.json#/properties/data
 *
 * @property ExpeditorTask $task
 */
final class ExpeditorTaskResponseData extends AbstractEntity
{
    protected static $types = ['task' => ['Cargomart\ApiClient\Entity\ExpeditorTask\Objects\ExpeditorTask']];
    protected static $nullables = ['task' => false];
}
