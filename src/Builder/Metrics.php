<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Metrics\Locality;

/**
 * url: /api/v2/metrics
 */
final class Metrics extends AbstractBuilder
{
    protected const URL = '/api/v2/metrics';

    public function locality(): Locality
    {
        return new Locality($this->params, $this->client);
    }
}
