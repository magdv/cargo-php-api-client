<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ac/driver-name
 */
final class DriverName extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac/driver-name';

    public function get(): DriverNameGet
    {
        return new DriverNameGet($this->client, $this->getUrl());
    }
}
