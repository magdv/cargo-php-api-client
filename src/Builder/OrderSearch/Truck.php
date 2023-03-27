<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-search/truck
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderSearch\Truck\TruckId;

/**
 * url: /api/v2/order-search/truck
 */
final class Truck extends AbstractBuilder
{
    protected const URL = '/api/v2/order-search/truck';

    public function truckId(int $truckId): TruckId
    {
        $params = $this->params;
        $params['truckId'] = $truckId;
        return new TruckId($params, $this->client);
    }

    public function get(): TruckGet
    {
        return new TruckGet($this->client, $this->getUrl());
    }
}
