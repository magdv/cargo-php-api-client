<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/info/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Info;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Info\Id\Hide;

/**
 * url: /api/v2/info/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/info/{id}';

    public function hide(): Hide
    {
        return new Hide($this->params, $this->client);
    }
}
