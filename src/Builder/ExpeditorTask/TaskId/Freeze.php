<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorTask\TaskId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-task/{taskId}/freeze
 */
final class Freeze extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-task/{taskId}/freeze';

    public function post(): FreezePost
    {
        return new FreezePost($this->client, $this->getUrl());
    }
}
