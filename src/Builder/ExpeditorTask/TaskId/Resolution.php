<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorTask\TaskId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-task/{taskId}/resolution
 */
final class Resolution extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-task/{taskId}/resolution';

    public function post(): ResolutionPost
    {
        return new ResolutionPost($this->client, $this->getUrl());
    }
}
