<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/expeditor-downtime-claim-pdf
 */
final class ExpeditorDowntimeClaimPdf extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/expeditor-downtime-claim-pdf';

    public function get(): ExpeditorDowntimeClaimPdfGet
    {
        return new ExpeditorDowntimeClaimPdfGet($this->client, $this->getUrl());
    }
}
