<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Pool;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Price;

/**
 * url: /api/v2/expeditor/price-local
 */
final class PriceLocal extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local';

    public function pool(): Pool
    {
        return new Pool($this->params, $this->client);
    }

    public function price(): Price
    {
        return new Price($this->params, $this->client);
    }
}
