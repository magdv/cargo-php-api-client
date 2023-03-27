<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/refresh-driver
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/refresh-driver
 */
final class RefreshDriver extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/refresh-driver';

    public function patch(): RefreshDriverPatch
    {
        return new RefreshDriverPatch($this->client, $this->getUrl());
    }
}
