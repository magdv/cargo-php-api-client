<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/exists
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/exists
 */
final class Exists extends AbstractBuilder
{
    protected const URL = '/api/v2/order/exists';

    public function get(): ExistsGet
    {
        return new ExistsGet($this->client, $this->getUrl());
    }
}
