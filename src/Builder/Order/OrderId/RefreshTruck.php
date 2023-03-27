<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/refresh-truck
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/refresh-truck
 */
final class RefreshTruck extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/refresh-truck';

    public function patch(): RefreshTruckPatch
    {
        return new RefreshTruckPatch($this->client, $this->getUrl());
    }
}
