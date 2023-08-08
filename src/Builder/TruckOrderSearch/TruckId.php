<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\TruckOrderSearch;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/truck-order-search/{truckId}
 */
final class TruckId extends AbstractBuilder
{
    protected const URL = '/api/v2/truck-order-search/{truckId}';

    public function get(): TruckIdGet
    {
        return new TruckIdGet($this->client, $this->getUrl());
    }
}
