<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-ecn/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorEcn;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorEcn\Id\History;
use Cargomart\ApiClient\Builder\ExpeditorEcn\Id\Sign;

/**
 * url: /api/v2/expeditor-ecn/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-ecn/{id}';

    public function sign(): Sign
    {
        return new Sign($this->params, $this->client);
    }

    public function history(): History
    {
        return new History($this->params, $this->client);
    }

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }
}
