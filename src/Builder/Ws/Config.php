<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Ws;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/ws/config
 */
final class Config extends AbstractBuilder
{
    protected const URL = '/api/v2/ws/config';

    public function post(): ConfigPost
    {
        return new ConfigPost($this->client, $this->getUrl());
    }
}
