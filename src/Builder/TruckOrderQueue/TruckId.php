<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/truck-order-queue/{truckId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\TruckOrderQueue;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/truck-order-queue/{truckId}
 */
final class TruckId extends AbstractBuilder
{
    protected const URL = '/api/v2/truck-order-queue/{truckId}';

    public function get(): TruckIdGet
    {
        return new TruckIdGet($this->client, $this->getUrl());
    }
}
