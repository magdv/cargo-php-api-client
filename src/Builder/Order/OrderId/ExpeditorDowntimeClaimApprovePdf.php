<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-downtime-claim-approve-pdf
 */
final class ExpeditorDowntimeClaimApprovePdf extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-downtime-claim-approve-pdf';

    public function get(): ExpeditorDowntimeClaimApprovePdfGet
    {
        return new ExpeditorDowntimeClaimApprovePdfGet($this->client, $this->getUrl());
    }
}
