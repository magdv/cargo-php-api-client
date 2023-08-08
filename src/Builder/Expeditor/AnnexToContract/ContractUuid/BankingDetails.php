<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\AnnexToContract\ContractUuid;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\AnnexToContract\ContractUuid\BankingDetails\Approve;

/**
 * url: /api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details
 */
final class BankingDetails extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details';

    public function approve(): Approve
    {
        return new Approve($this->params, $this->client);
    }

    public function get(): BankingDetailsGet
    {
        return new BankingDetailsGet($this->client, $this->getUrl());
    }

    public function post(): BankingDetailsPost
    {
        return new BankingDetailsPost($this->client, $this->getUrl());
    }

    public function put(): BankingDetailsPut
    {
        return new BankingDetailsPut($this->client, $this->getUrl());
    }

    public function delete(): BankingDetailsDelete
    {
        return new BankingDetailsDelete($this->client, $this->getUrl());
    }
}
