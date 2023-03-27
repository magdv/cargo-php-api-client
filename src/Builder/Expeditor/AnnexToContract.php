<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor/annex-to-contract
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\AnnexToContract\ContractUuid;

/**
 * url: /api/v2/expeditor/annex-to-contract
 */
final class AnnexToContract extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/annex-to-contract';

    public function contractUuid(string $contractUuid): ContractUuid
    {
        $params = $this->params;
        $params['contractUuid'] = $contractUuid;
        return new ContractUuid($params, $this->client);
    }
}
