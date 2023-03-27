<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tracking/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tracking\Id\Active;

/**
 * url: /api/v2/tracking/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/tracking/{id}';

    public function active(): Active
    {
        return new Active($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function put(): IdPut
    {
        return new IdPut($this->client, $this->getUrl());
    }

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}
