<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/proxy-consignor-additional-info
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-consignor-additional-info
 */
final class ProxyConsignorAdditionalInfo extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-consignor-additional-info';

    public function get(): ProxyConsignorAdditionalInfoGet
    {
        return new ProxyConsignorAdditionalInfoGet($this->client, $this->getUrl());
    }

    public function post(): ProxyConsignorAdditionalInfoPost
    {
        return new ProxyConsignorAdditionalInfoPost($this->client, $this->getUrl());
    }
}
