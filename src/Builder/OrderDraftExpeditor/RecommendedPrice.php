<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/recommended-price
 */
final class RecommendedPrice extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/recommended-price';

    public function get(): RecommendedPriceGet
    {
        return new RecommendedPriceGet($this->client, $this->getUrl());
    }
}
