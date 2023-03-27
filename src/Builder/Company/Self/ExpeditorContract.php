<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/self/expeditor-contract
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/expeditor-contract
 */
final class ExpeditorContract extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/expeditor-contract';

    public function get(): ExpeditorContractGet
    {
        return new ExpeditorContractGet($this->client, $this->getUrl());
    }
}
