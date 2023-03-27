<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tender/request/{tenderId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Request\TenderId\Cancel;
use Cargomart\ApiClient\Builder\Tender\Request\TenderId\CompanyStats;
use Cargomart\ApiClient\Builder\Tender\Request\TenderId\Results;

/**
 * url: /api/v2/tender/request/{tenderId}
 */
final class TenderId extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/{tenderId}';

    public function cancel(): Cancel
    {
        return new Cancel($this->params, $this->client);
    }

    public function companyStats(): CompanyStats
    {
        return new CompanyStats($this->params, $this->client);
    }

    public function results(): Results
    {
        return new Results($this->params, $this->client);
    }

    public function get(): TenderIdGet
    {
        return new TenderIdGet($this->client, $this->getUrl());
    }
}
