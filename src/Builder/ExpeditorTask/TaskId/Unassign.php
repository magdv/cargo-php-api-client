<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorTask\TaskId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-task/{taskId}/unassign
 */
final class Unassign extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-task/{taskId}/unassign';

    public function post(): UnassignPost
    {
        return new UnassignPost($this->client, $this->getUrl());
    }
}
