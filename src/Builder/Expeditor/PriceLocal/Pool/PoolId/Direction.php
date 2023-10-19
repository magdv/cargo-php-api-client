<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId\Direction\DirectionId;

/**
 * url: /api/v2/expeditor/price-local/pool/{poolId}/direction
 */
final class Direction extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/pool/{poolId}/direction';

    public function directionId(int $directionId): DirectionId
    {
        $params = $this->params;
        $params['directionId'] = $directionId;
        return new DirectionId($params, $this->client);
    }

    public function post(): DirectionPost
    {
        return new DirectionPost($this->client, $this->getUrl());
    }

    public function get(): DirectionGet
    {
        return new DirectionGet($this->client, $this->getUrl());
    }
}
