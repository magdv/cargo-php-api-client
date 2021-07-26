<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy;

/**
 * url: /api/v2/expeditor-proposal/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}';

    public function proxy(): Proxy
    {
        return new Proxy($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
