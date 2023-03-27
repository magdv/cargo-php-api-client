<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/refuse-cancel
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/refuse-cancel
 */
final class RefuseCancel extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/refuse-cancel';

    public function post(): RefuseCancelPost
    {
        return new RefuseCancelPost($this->client, $this->getUrl());
    }
}
