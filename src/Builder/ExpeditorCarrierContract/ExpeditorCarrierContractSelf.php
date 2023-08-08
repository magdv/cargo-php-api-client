<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorCarrierContract;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-carrier-contract/self
 */
final class ExpeditorCarrierContractSelf extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-carrier-contract/self';

    public function get(): ExpeditorCarrierContractSelfGet
    {
        return new ExpeditorCarrierContractSelfGet($this->client, $this->getUrl());
    }
}
