<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\AnnexToContract;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\AnnexToContract\ContractUuid\BankingDetails;

/**
 * url: /api/v2/expeditor/annex-to-contract/{contractUuid}
 */
final class ContractUuid extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/annex-to-contract/{contractUuid}';

    public function bankingDetails(): BankingDetails
    {
        return new BankingDetails($this->params, $this->client);
    }
}
