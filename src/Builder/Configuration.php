<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/configuration
 */
final class Configuration extends AbstractBuilder
{
    protected const URL = '/api/v2/configuration';

    public function get(): ConfigurationGet
    {
        return new ConfigurationGet($this->client, $this->getUrl());
    }
}
