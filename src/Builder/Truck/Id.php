<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Truck;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/truck/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/truck/{id}';

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function put(): IdPut
    {
        return new IdPut($this->client, $this->getUrl());
    }
}
