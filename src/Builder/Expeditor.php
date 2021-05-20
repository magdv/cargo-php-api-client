<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\Id;

/**
 * url: /api/v2/expeditor
 */
final class Expeditor extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): ExpeditorGet
    {
        return new ExpeditorGet($this->client, $this->getUrl());
    }
}
