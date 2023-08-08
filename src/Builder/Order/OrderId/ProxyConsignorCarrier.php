<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-consignor-carrier
 */
final class ProxyConsignorCarrier extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-consignor-carrier';

    public function get(): ProxyConsignorCarrierGet
    {
        return new ProxyConsignorCarrierGet($this->client, $this->getUrl());
    }
}
