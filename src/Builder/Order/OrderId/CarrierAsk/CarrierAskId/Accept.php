<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\CarrierAsk\CarrierAskId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/carrier-ask/{carrierAskId}/accept
 */
final class Accept extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-ask/{carrierAskId}/accept';

    public function post(): AcceptPost
    {
        return new AcceptPost($this->client, $this->getUrl());
    }
}
