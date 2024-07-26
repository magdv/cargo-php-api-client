<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/downtime-claim-proof
 */
final class DowntimeClaimProof extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/downtime-claim-proof';

    public function post(): DowntimeClaimProofPost
    {
        return new DowntimeClaimProofPost($this->client, $this->getUrl());
    }
}
