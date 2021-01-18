<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/rate
 */
final class Rate extends AbstractBuilder
{
    protected const URL = '/api/v2/rate';

    public function get(): RateGet
    {
        return new RateGet($this->client, $this->getUrl());
    }
}
