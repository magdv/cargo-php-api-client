<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject
 */
final class CarrierDowntimeClaimReject extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject';

    public function post(): CarrierDowntimeClaimRejectPost
    {
        return new CarrierDowntimeClaimRejectPost($this->client, $this->getUrl());
    }
}
