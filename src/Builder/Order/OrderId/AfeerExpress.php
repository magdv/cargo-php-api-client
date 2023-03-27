<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/afeer-express
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/afeer-express
 */
final class AfeerExpress extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/afeer-express';

    public function post(): AfeerExpressPost
    {
        return new AfeerExpressPost($this->client, $this->getUrl());
    }
}
