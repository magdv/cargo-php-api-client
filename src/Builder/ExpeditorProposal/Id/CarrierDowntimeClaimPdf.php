<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/carrier-downtime-claim-pdf
 */
final class CarrierDowntimeClaimPdf extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/carrier-downtime-claim-pdf';

    public function post(): CarrierDowntimeClaimPdfPost
    {
        return new CarrierDowntimeClaimPdfPost($this->client, $this->getUrl());
    }
}
