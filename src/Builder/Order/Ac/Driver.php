<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ac/driver
 */
final class Driver extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac/driver';

    public function get(): DriverGet
    {
        return new DriverGet($this->client, $this->getUrl());
    }
}
