<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/carrier-ask-stat
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/carrier-ask-stat
 */
final class CarrierAskStat extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-ask-stat';

    public function get(): CarrierAskStatGet
    {
        return new CarrierAskStatGet($this->client, $this->getUrl());
    }
}
