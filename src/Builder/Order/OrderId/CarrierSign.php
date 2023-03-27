<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/carrier-sign
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/carrier-sign
 */
final class CarrierSign extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-sign';

    public function post(): CarrierSignPost
    {
        return new CarrierSignPost($this->client, $this->getUrl());
    }
}
