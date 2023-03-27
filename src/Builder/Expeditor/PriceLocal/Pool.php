<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor/price-local/pool
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId;

/**
 * url: /api/v2/expeditor/price-local/pool
 */
final class Pool extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/pool';

    public function poolId(int $poolId): PoolId
    {
        $params = $this->params;
        $params['poolId'] = $poolId;
        return new PoolId($params, $this->client);
    }

    public function post(): PoolPost
    {
        return new PoolPost($this->client, $this->getUrl());
    }

    public function get(): PoolGet
    {
        return new PoolGet($this->client, $this->getUrl());
    }
}
