<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/metrics/locality
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Metrics;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/metrics/locality
 */
final class Locality extends AbstractBuilder
{
    protected const URL = '/api/v2/metrics/locality';

    public function post(): LocalityPost
    {
        return new LocalityPost($this->client, $this->getUrl());
    }
}
