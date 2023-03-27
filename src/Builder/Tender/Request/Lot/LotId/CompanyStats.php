<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tender/request/lot/{lotId}/company-stats
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/request/lot/{lotId}/company-stats
 */
final class CompanyStats extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/lot/{lotId}/company-stats';

    public function get(): CompanyStatsGet
    {
        return new CompanyStatsGet($this->client, $this->getUrl());
    }
}
