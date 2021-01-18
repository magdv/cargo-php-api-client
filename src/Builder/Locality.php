<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Locality\Nearest;

/**
 * url: /api/v2/locality
 */
final class Locality extends AbstractBuilder
{
    protected const URL = '/api/v2/locality';

    public function nearest(): Nearest
    {
        return new Nearest($this->params, $this->client);
    }

    public function get(): LocalityGet
    {
        return new LocalityGet($this->client, $this->getUrl());
    }
}
