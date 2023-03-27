<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/finish
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/finish
 */
final class Finish extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/finish';

    public function post(): FinishPost
    {
        return new FinishPost($this->client, $this->getUrl());
    }
}
