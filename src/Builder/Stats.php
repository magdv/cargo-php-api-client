<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Stats\PriceStat;

/**
 * url: /api/v2/stats
 */
final class Stats extends AbstractBuilder
{
    protected const URL = '/api/v2/stats';

    public function priceStat(): PriceStat
    {
        return new PriceStat($this->params, $this->client);
    }
}
