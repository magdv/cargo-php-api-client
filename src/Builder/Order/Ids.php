<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ids
 */
final class Ids extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ids';

    public function get(): IdsGet
    {
        return new IdsGet($this->client, $this->getUrl());
    }
}
