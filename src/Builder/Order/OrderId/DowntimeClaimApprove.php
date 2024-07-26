<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-approve
 */
final class DowntimeClaimApprove extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-approve';

    public function post(): DowntimeClaimApprovePost
    {
        return new DowntimeClaimApprovePost($this->client, $this->getUrl());
    }
}
