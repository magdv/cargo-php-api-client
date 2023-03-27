<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/bid
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Bid\Last;

/**
 * url: /api/v2/order/{orderId}/bid
 */
final class Bid extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/bid';

    public function last(): Last
    {
        return new Last($this->params, $this->client);
    }

    public function post(): BidPost
    {
        return new BidPost($this->client, $this->getUrl());
    }

    public function get(): BidGet
    {
        return new BidGet($this->client, $this->getUrl());
    }
}
