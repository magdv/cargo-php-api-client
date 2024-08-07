<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-refuse
 */
final class DowntimeClaimRefuse extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-refuse';

    public function post(): DowntimeClaimRefusePost
    {
        return new DowntimeClaimRefusePost($this->client, $this->getUrl());
    }
}
