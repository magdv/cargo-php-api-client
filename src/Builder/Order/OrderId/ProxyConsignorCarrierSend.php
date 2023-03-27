<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/proxy-consignor-carrier-send
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-consignor-carrier-send
 */
final class ProxyConsignorCarrierSend extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-consignor-carrier-send';

    public function post(): ProxyConsignorCarrierSendPost
    {
        return new ProxyConsignorCarrierSendPost($this->client, $this->getUrl());
    }
}
