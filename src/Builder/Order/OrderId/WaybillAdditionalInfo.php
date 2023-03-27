<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/waybill-additional-info
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/waybill-additional-info
 */
final class WaybillAdditionalInfo extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/waybill-additional-info';

    public function get(): WaybillAdditionalInfoGet
    {
        return new WaybillAdditionalInfoGet($this->client, $this->getUrl());
    }

    public function patch(): WaybillAdditionalInfoPatch
    {
        return new WaybillAdditionalInfoPatch($this->client, $this->getUrl());
    }
}
