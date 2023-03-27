<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/kontur-data-approve
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/kontur-data-approve
 */
final class KonturDataApprove extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/kontur-data-approve';

    public function post(): KonturDataApprovePost
    {
        return new KonturDataApprovePost($this->client, $this->getUrl());
    }
}
