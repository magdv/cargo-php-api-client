<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/itinerary
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/itinerary
 */
final class Itinerary extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/itinerary';

    public function get(): ItineraryGet
    {
        return new ItineraryGet($this->client, $this->getUrl());
    }
}
