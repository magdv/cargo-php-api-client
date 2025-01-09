<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-downtime-claim-reject-pdf
 */
final class ExpeditorDowntimeClaimRejectPdf extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-downtime-claim-reject-pdf';

    public function get(): ExpeditorDowntimeClaimRejectPdfGet
    {
        return new ExpeditorDowntimeClaimRejectPdfGet($this->client, $this->getUrl());
    }
}
