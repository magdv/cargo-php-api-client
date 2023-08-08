<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/truck-driver
 */
final class TruckDriver extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/truck-driver';

    public function patch(): TruckDriverPatch
    {
        return new TruckDriverPatch($this->client, $this->getUrl());
    }
}
