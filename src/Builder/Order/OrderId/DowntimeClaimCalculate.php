<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-calculate
 */
final class DowntimeClaimCalculate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-calculate';

    public function post(): DowntimeClaimCalculatePost
    {
        return new DowntimeClaimCalculatePost($this->client, $this->getUrl());
    }
}
