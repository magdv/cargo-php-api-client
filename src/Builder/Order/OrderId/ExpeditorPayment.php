<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/expeditor-payment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-payment
 */
final class ExpeditorPayment extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-payment';

    public function get(): ExpeditorPaymentGet
    {
        return new ExpeditorPaymentGet($this->client, $this->getUrl());
    }
}
