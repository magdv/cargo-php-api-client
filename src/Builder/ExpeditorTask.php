<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorTask\TaskId;

/**
 * url: /api/v2/expeditor-task
 */
final class ExpeditorTask extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-task';

    public function taskId(string $taskId): TaskId
    {
        $params = $this->params;
        $params['taskId'] = $taskId;
        return new TaskId($params, $this->client);
    }

    public function get(): ExpeditorTaskGet
    {
        return new ExpeditorTaskGet($this->client, $this->getUrl());
    }
}
