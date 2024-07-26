<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-step-bid
 */
final class OrderStepBid extends AbstractBuilder
{
    protected const URL = '/api/v2/order-step-bid';

    public function get(): OrderStepBidGet
    {
        return new OrderStepBidGet($this->client, $this->getUrl());
    }
}
