<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/worker
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Worker\Id;

/**
 * url: /api/v2/worker
 */
final class Worker extends AbstractBuilder
{
    protected const URL = '/api/v2/worker';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): WorkerGet
    {
        return new WorkerGet($this->client, $this->getUrl());
    }

    public function post(): WorkerPost
    {
        return new WorkerPost($this->client, $this->getUrl());
    }

    public function delete(): WorkerDelete
    {
        return new WorkerDelete($this->client, $this->getUrl());
    }
}
