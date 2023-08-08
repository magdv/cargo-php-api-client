<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/pin
 */
final class Pin extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/pin';

    public function get(): PinGet
    {
        return new PinGet($this->client, $this->getUrl());
    }

    public function post(): PinPost
    {
        return new PinPost($this->client, $this->getUrl());
    }

    public function delete(): PinDelete
    {
        return new PinDelete($this->client, $this->getUrl());
    }
}
