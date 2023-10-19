<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\PriceLocal\Price\PriceId;

/**
 * url: /api/v2/expeditor/price-local/price
 */
final class Price extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/price';

    public function priceId(int $priceId): PriceId
    {
        $params = $this->params;
        $params['priceId'] = $priceId;
        return new PriceId($params, $this->client);
    }

    public function get(): PriceGet
    {
        return new PriceGet($this->client, $this->getUrl());
    }

    public function post(): PricePost
    {
        return new PricePost($this->client, $this->getUrl());
    }
}
