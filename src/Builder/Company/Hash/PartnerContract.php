<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/partner-contract
 */
final class PartnerContract extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/partner-contract';

    public function put(): PartnerContractPut
    {
        return new PartnerContractPut($this->client, $this->getUrl());
    }
}
