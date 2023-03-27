<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-ecn/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderEcn;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderEcn\Id\Cancel;
use Cargomart\ApiClient\Builder\OrderEcn\Id\History;

/**
 * url: /api/v2/order-ecn/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/order-ecn/{id}';

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function history(): History
    {
        return new History($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
