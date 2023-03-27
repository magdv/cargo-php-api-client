<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/proxy
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy
 */
final class Proxy extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy';

    public function post(): ProxyPost
    {
        return new ProxyPost($this->client, $this->getUrl());
    }
}
