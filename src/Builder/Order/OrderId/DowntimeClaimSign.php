<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-sign
 */
final class DowntimeClaimSign extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-sign';

    public function post(): DowntimeClaimSignPost
    {
        return new DowntimeClaimSignPost($this->client, $this->getUrl());
    }
}
