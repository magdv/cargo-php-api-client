<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/broker
 */
final class Broker extends AbstractBuilder
{
    protected const URL = '/api/v2/order/broker';

    public function get(): BrokerGet
    {
        return new BrokerGet($this->client, $this->getUrl());
    }
}
