<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/waybill-template
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/waybill-template
 */
final class WaybillTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/waybill-template';

    public function get(): WaybillTemplateGet
    {
        return new WaybillTemplateGet($this->client, $this->getUrl());
    }
}
