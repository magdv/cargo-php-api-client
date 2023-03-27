<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor/price-local/pool/{poolId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId\Direction;

/**
 * url: /api/v2/expeditor/price-local/pool/{poolId}
 */
final class PoolId extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/pool/{poolId}';

    public function direction(): Direction
    {
        return new Direction($this->params, $this->client);
    }

    public function get(): PoolIdGet
    {
        return new PoolIdGet($this->client, $this->getUrl());
    }

    public function patch(): PoolIdPatch
    {
        return new PoolIdPatch($this->client, $this->getUrl());
    }
}
