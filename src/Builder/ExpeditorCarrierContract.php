<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-carrier-contract
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorCarrierContract\ExpeditorCarrierContractSelf;

/**
 * url: /api/v2/expeditor-carrier-contract
 */
final class ExpeditorCarrierContract extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-carrier-contract';

    public function expeditorCarrierContractSelf(): ExpeditorCarrierContractSelf
    {
        return new ExpeditorCarrierContractSelf($this->params, $this->client);
    }
}
