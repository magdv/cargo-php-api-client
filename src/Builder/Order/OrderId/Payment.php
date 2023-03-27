<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/payment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/payment
 */
final class Payment extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/payment';

    public function get(): PaymentGet
    {
        return new PaymentGet($this->client, $this->getUrl());
    }
}
