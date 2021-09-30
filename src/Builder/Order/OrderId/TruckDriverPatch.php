<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/truck-driver-patch
 */
final class TruckDriverPatch extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/truck-driver-patch';

    public function post(): TruckDriverPatchPost
    {
        return new TruckDriverPatchPost($this->client, $this->getUrl());
    }
}
