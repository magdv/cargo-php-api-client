<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-search/truck/{truckId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch\Truck;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-search/truck/{truckId}
 */
final class TruckId extends AbstractBuilder
{
    protected const URL = '/api/v2/order-search/truck/{truckId}';

    public function put(): TruckIdPut
    {
        return new TruckIdPut($this->client, $this->getUrl());
    }

    public function delete(): TruckIdDelete
    {
        return new TruckIdDelete($this->client, $this->getUrl());
    }
}
