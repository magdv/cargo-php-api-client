<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-contract-conclusion/status
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorContractConclusion;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-contract-conclusion/status
 */
final class Status extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-contract-conclusion/status';

    public function post(): StatusPost
    {
        return new StatusPost($this->client, $this->getUrl());
    }
}
