<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-approve
 */
final class CarrierDowntimeClaimApprove extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-downtime-claim-approve';

    public function post(): CarrierDowntimeClaimApprovePost
    {
        return new CarrierDowntimeClaimApprovePost($this->client, $this->getUrl());
    }
}
