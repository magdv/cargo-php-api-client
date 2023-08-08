<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/trailer
 */
final class Trailer extends AbstractBuilder
{
    protected const URL = '/api/v2/trailer';

    public function get(): TrailerGet
    {
        return new TrailerGet($this->client, $this->getUrl());
    }
}
