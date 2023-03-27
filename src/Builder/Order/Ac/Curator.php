<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/ac/curator
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ac/curator
 */
final class Curator extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac/curator';

    public function get(): CuratorGet
    {
        return new CuratorGet($this->client, $this->getUrl());
    }
}
