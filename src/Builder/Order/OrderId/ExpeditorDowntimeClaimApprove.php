<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-downtime-claim-approve
 */
final class ExpeditorDowntimeClaimApprove extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-downtime-claim-approve';

    public function post(): ExpeditorDowntimeClaimApprovePost
    {
        return new ExpeditorDowntimeClaimApprovePost($this->client, $this->getUrl());
    }
}
