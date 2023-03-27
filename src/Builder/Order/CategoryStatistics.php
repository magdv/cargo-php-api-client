<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/category-statistics
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/category-statistics
 */
final class CategoryStatistics extends AbstractBuilder
{
    protected const URL = '/api/v2/order/category-statistics';

    public function get(): CategoryStatisticsGet
    {
        return new CategoryStatisticsGet($this->client, $this->getUrl());
    }
}
