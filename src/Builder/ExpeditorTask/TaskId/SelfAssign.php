<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorTask\TaskId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-task/{taskId}/self-assign
 */
final class SelfAssign extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-task/{taskId}/self-assign';

    public function post(): SelfAssignPost
    {
        return new SelfAssignPost($this->client, $this->getUrl());
    }
}
