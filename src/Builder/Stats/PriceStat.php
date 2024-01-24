<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Stats;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/stats/price-stat
 */
final class PriceStat extends AbstractBuilder
{
    protected const URL = '/api/v2/stats/price-stat';

    public function get(): PriceStatGet
    {
        return new PriceStatGet($this->client, $this->getUrl());
    }
}
