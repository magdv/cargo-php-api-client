<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\ExpeditorEcn\Id;

/**
 * url: /api/v2/expeditor-ecn
 */
final class ExpeditorEcn extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-ecn';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): ExpeditorEcnGet
    {
        return new ExpeditorEcnGet($this->client, $this->getUrl());
    }
}
