<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Truck\Id;

/**
 * url: /api/v2/truck
 */
final class Truck extends AbstractBuilder
{
    protected const URL = '/api/v2/truck';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): TruckGet
    {
        return new TruckGet($this->client, $this->getUrl());
    }

    public function post(): TruckPost
    {
        return new TruckPost($this->client, $this->getUrl());
    }

    public function delete(): TruckDelete
    {
        return new TruckDelete($this->client, $this->getUrl());
    }
}
