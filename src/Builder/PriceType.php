<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/price-type
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/price-type
 */
final class PriceType extends AbstractBuilder
{
    protected const URL = '/api/v2/price-type';

    public function get(): PriceTypeGet
    {
        return new PriceTypeGet($this->client, $this->getUrl());
    }
}
