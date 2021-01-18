<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/consignor-refuse
 */
final class ConsignorRefuse extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/consignor-refuse';

    public function post(): ConsignorRefusePost
    {
        return new ConsignorRefusePost($this->client, $this->getUrl());
    }
}
