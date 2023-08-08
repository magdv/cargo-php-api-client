<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/invoice-gp-carrier
 */
final class InvoiceGpCarrier extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/invoice-gp-carrier';

    public function get(): InvoiceGpCarrierGet
    {
        return new InvoiceGpCarrierGet($this->client, $this->getUrl());
    }

    public function put(): InvoiceGpCarrierPut
    {
        return new InvoiceGpCarrierPut($this->client, $this->getUrl());
    }
}
