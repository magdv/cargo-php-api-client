<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/proxy-consignor-email
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-consignor-email
 */
final class ProxyConsignorEmail extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-consignor-email';

    public function get(): ProxyConsignorEmailGet
    {
        return new ProxyConsignorEmailGet($this->client, $this->getUrl());
    }

    public function post(): ProxyConsignorEmailPost
    {
        return new ProxyConsignorEmailPost($this->client, $this->getUrl());
    }
}
