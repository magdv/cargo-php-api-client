<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Ws\Config;

/**
 * url: /api/v2/ws
 */
final class Ws extends AbstractBuilder
{
    protected const URL = '/api/v2/ws';

    public function config(): Config
    {
        return new Config($this->params, $this->client);
    }
}
