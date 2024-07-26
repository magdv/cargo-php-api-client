<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorTask;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorTask\TaskId\Freeze;
use Cargomart\ApiClient\Builder\ExpeditorTask\TaskId\Resolution;
use Cargomart\ApiClient\Builder\ExpeditorTask\TaskId\SelfAssign;
use Cargomart\ApiClient\Builder\ExpeditorTask\TaskId\Unassign;

/**
 * url: /api/v2/expeditor-task/{taskId}
 */
final class TaskId extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-task/{taskId}';

    public function resolution(): Resolution
    {
        return new Resolution($this->params, $this->client);
    }

    public function freeze(): Freeze
    {
        return new Freeze($this->params, $this->client);
    }

    public function selfAssign(): SelfAssign
    {
        return new SelfAssign($this->params, $this->client);
    }

    public function unassign(): Unassign
    {
        return new Unassign($this->params, $this->client);
    }

    public function get(): TaskIdGet
    {
        return new TaskIdGet($this->client, $this->getUrl());
    }
}
