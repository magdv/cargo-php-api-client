<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/waybill-template-gp
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/waybill-template-gp
 */
final class WaybillTemplateGp extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/waybill-template-gp';

    public function get(): WaybillTemplateGpGet
    {
        return new WaybillTemplateGpGet($this->client, $this->getUrl());
    }
}
