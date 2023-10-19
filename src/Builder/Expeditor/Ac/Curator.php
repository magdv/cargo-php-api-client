<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor/ac/curator
 */
final class Curator extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/ac/curator';

    public function get(): CuratorGet
    {
        return new CuratorGet($this->client, $this->getUrl());
    }
}
