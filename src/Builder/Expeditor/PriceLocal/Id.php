<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\PriceLocal;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor/price-local/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/price-local/{id}';

    public function get(): IdGet
    {
        return new IdGet($this->client, $this->getUrl());
    }

    public function put(): IdPut
    {
        return new IdPut($this->client, $this->getUrl());
    }
}
