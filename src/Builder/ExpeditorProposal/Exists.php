<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/exists
 */
final class Exists extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/exists';

    public function get(): ExistsGet
    {
        return new ExistsGet($this->client, $this->getUrl());
    }
}
