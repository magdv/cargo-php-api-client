<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/price
 */
final class Price extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/price';

    public function get(): PriceGet
    {
        return new PriceGet($this->client, $this->getUrl());
    }
}
