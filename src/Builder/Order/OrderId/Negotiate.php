<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/negotiate
 */
final class Negotiate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/negotiate';

    public function post(): NegotiatePost
    {
        return new NegotiatePost($this->client, $this->getUrl());
    }
}
