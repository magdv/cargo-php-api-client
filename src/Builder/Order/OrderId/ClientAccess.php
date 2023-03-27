<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/client-access
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/client-access
 */
final class ClientAccess extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/client-access';

    public function get(): ClientAccessGet
    {
        return new ClientAccessGet($this->client, $this->getUrl());
    }

    public function patch(): ClientAccessPatch
    {
        return new ClientAccessPatch($this->client, $this->getUrl());
    }

    public function delete(): ClientAccessDelete
    {
        return new ClientAccessDelete($this->client, $this->getUrl());
    }
}
