<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/fix-price
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/fix-price
 */
final class FixPrice extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/fix-price';

    public function get(): FixPriceGet
    {
        return new FixPriceGet($this->client, $this->getUrl());
    }
}
