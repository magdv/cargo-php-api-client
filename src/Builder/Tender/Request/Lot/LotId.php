<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tender/request/lot/{lotId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId\CompanyStats;
use Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId\Offer;
use Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId\Proposal;

/**
 * url: /api/v2/tender/request/lot/{lotId}
 */
final class LotId extends AbstractBuilder
{
    protected const URL = '/api/v2/tender/request/lot/{lotId}';

    public function offer(): Offer
    {
        return new Offer($this->params, $this->client);
    }

    public function proposal(): Proposal
    {
        return new Proposal($this->params, $this->client);
    }

    public function companyStats(): CompanyStats
    {
        return new CompanyStats($this->params, $this->client);
    }

    public function get(): LotIdGet
    {
        return new LotIdGet($this->client, $this->getUrl());
    }
}
