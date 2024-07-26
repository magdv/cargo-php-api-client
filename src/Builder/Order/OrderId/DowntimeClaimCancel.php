<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-cancel
 */
final class DowntimeClaimCancel extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-cancel';

    public function post(): DowntimeClaimCancelPost
    {
        return new DowntimeClaimCancelPost($this->client, $this->getUrl());
    }
}
