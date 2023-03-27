<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/ac/price-local-pool
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/ac/price-local-pool
 */
final class PriceLocalPool extends AbstractBuilder
{
    protected const URL = '/api/v2/ac/price-local-pool';

    public function get(): PriceLocalPoolGet
    {
        return new PriceLocalPoolGet($this->client, $this->getUrl());
    }
}
