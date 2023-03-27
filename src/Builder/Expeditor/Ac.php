<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor/ac
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Expeditor\Ac\Curator;

/**
 * url: /api/v2/expeditor/ac
 */
final class Ac extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor/ac';

    public function curator(): Curator
    {
        return new Curator($this->params, $this->client);
    }
}
