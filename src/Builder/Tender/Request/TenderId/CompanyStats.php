<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tender/request/{tenderId}/company-stats
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\TenderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tender/request/{tenderId}/company-stats
 */
final class CompanyStats extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/{tenderId}/company-stats';

    public function get(): CompanyStatsGet
    {
        return new CompanyStatsGet($this->client, $this->getUrl());
    }
}
