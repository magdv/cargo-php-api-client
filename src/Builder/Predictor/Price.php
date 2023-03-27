<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/predictor/price
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Predictor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/predictor/price
 */
final class Price extends AbstractBuilder
{
    protected const URL = '/api/v2/predictor/price';

    public function get(): PriceGet
    {
        return new PriceGet($this->client, $this->getUrl());
    }
}
