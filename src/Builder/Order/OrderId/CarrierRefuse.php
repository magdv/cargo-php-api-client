<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/carrier-refuse
 */
final class CarrierRefuse extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-refuse';

    public function post(): CarrierRefusePost
    {
        return new CarrierRefusePost($this->client, $this->getUrl());
    }
}
