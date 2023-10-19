<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\AnnexToContract\ContractUuid\BankingDetails;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details/approve
 */
final class Approve extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details/approve';

    public function post(): ApprovePost
    {
        return new ApprovePost($this->client, $this->getUrl());
    }
}
