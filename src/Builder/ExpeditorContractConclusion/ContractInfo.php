<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/contract-info
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/contract-info
 */
final class ContractInfo extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/contract-info';

    public function post(): ContractInfoPost
    {
        return new ContractInfoPost($this->client, $this->getUrl());
    }
}
