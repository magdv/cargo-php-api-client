<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/broker
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/broker
 */
final class Broker extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/broker';

    public function put(): BrokerPut
    {
        return new BrokerPut($this->client, $this->getUrl());
    }

    public function get(): BrokerGet
    {
        return new BrokerGet($this->client, $this->getUrl());
    }

    public function delete(): BrokerDelete
    {
        return new BrokerDelete($this->client, $this->getUrl());
    }
}
