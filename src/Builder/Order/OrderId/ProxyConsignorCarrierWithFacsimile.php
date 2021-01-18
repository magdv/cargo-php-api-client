<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-consignor-carrier-with-facsimile
 */
final class ProxyConsignorCarrierWithFacsimile extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-consignor-carrier-with-facsimile';

    public function get(): ProxyConsignorCarrierWithFacsimileGet
    {
        return new ProxyConsignorCarrierWithFacsimileGet($this->client, $this->getUrl());
    }
}
