<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor/price-local/price/{priceId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Price;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor/price-local/price/{priceId}
 */
final class PriceId extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/price/{priceId}';

    public function get(): PriceIdGet
    {
        return new PriceIdGet($this->client, $this->getUrl());
    }

    public function put(): PriceIdPut
    {
        return new PriceIdPut($this->client, $this->getUrl());
    }
}
