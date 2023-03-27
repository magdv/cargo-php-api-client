<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/truck-order-queue
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\TruckOrderQueue\TruckId;

/**
 * url: /api/v2/truck-order-queue
 */
final class TruckOrderQueue extends AbstractBuilder
{
    protected const URL = '/api/v2/truck-order-queue';

    public function truckId(int $truckId): TruckId
    {
        $params = $this->params;
        $params['truckId'] = $truckId;
        return new TruckId($params, $this->client);
    }
}
