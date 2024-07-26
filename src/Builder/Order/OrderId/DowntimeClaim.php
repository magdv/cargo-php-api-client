<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim
 */
final class DowntimeClaim extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim';

    public function post(): DowntimeClaimPost
    {
        return new DowntimeClaimPost($this->client, $this->getUrl());
    }
}
