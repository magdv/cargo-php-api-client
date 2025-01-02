<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-pdf
 */
final class DowntimeClaimPdf extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-pdf';

    public function get(): DowntimeClaimPdfGet
    {
        return new DowntimeClaimPdfGet($this->client, $this->getUrl());
    }
}
