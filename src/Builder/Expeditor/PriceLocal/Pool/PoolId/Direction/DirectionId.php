<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor/price-local/pool/{poolId}/direction/{directionId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool\PoolId\Direction;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor/price-local/pool/{poolId}/direction/{directionId}
 */
final class DirectionId extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/pool/{poolId}/direction/{directionId}';

    public function delete(): DirectionIdDelete
    {
        return new DirectionIdDelete($this->client, $this->getUrl());
    }
}
