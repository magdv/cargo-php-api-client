<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/locality/nearest
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Locality;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/locality/nearest
 */
final class Nearest extends AbstractBuilder
{
    protected const URL = '/api/v2/locality/nearest';

    public function get(): NearestGet
    {
        return new NearestGet($this->client, $this->getUrl());
    }
}
