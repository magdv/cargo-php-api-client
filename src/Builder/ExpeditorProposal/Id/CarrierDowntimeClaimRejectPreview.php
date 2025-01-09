<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject-preview
 */
final class CarrierDowntimeClaimRejectPreview extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-downtime-claim-reject-preview';

    public function post(): CarrierDowntimeClaimRejectPreviewPost
    {
        return new CarrierDowntimeClaimRejectPreviewPost($this->client, $this->getUrl());
    }
}
