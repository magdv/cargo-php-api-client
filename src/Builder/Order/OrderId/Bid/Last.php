<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Bid;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/bid/last
 */
final class Last extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/bid/last';

    public function get(): LastGet
    {
        return new LastGet($this->client, $this->getUrl());
    }
}
