<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\CarrierAsk;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\CarrierAsk\CarrierAskId\Accept;

/**
 * url: /api/v2/order/{orderId}/carrier-ask/{carrierAskId}
 */
final class CarrierAskId extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-ask/{carrierAskId}';

    public function accept(): Accept
    {
        return new Accept($this->params, $this->client);
    }
}
