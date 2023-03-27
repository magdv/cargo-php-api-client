<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/proxy-consignor-carrier-additional-info
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/proxy-consignor-carrier-additional-info
 */
final class ProxyConsignorCarrierAdditionalInfo extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/proxy-consignor-carrier-additional-info';

    public function get(): ProxyConsignorCarrierAdditionalInfoGet
    {
        return new ProxyConsignorCarrierAdditionalInfoGet($this->client, $this->getUrl());
    }

    public function patch(): ProxyConsignorCarrierAdditionalInfoPatch
    {
        return new ProxyConsignorCarrierAdditionalInfoPatch($this->client, $this->getUrl());
    }
}
