<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/truck-driver-correction/reject
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\TruckDriverCorrection;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/truck-driver-correction/reject
 */
final class Reject extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/truck-driver-correction/reject';

    public function post(): RejectPost
    {
        return new RejectPost($this->client, $this->getUrl());
    }
}
