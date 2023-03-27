<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/monitoring
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/monitoring
 */
final class Monitoring extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/monitoring';

    public function post(): MonitoringPost
    {
        return new MonitoringPost($this->client, $this->getUrl());
    }
}
