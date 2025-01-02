<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-downtime-claim-reject
 */
final class ExpeditorDowntimeClaimReject extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-downtime-claim-reject';

    public function post(): ExpeditorDowntimeClaimRejectPost
    {
        return new ExpeditorDowntimeClaimRejectPost($this->client, $this->getUrl());
    }
}
