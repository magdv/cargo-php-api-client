<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-direct-to-third-party
 */
final class CarrierDowntimeClaimDirectToThirdParty extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-downtime-claim-direct-to-third-party';

    public function post(): CarrierDowntimeClaimDirectToThirdPartyPost
    {
        return new CarrierDowntimeClaimDirectToThirdPartyPost($this->client, $this->getUrl());
    }
}
