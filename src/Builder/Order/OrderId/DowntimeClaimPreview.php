<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-preview
 */
final class DowntimeClaimPreview extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-preview';

    public function get(): DowntimeClaimPreviewGet
    {
        return new DowntimeClaimPreviewGet($this->client, $this->getUrl());
    }
}
