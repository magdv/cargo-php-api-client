<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\OrderSearch\Truck;

/**
 * url: /api/v2/order-search
 */
final class OrderSearch extends AbstractBuilder
{
    protected const URL = '/api/v2/order-search';

    public function truck(): Truck
    {
        return new Truck($this->params, $this->client);
    }
}
