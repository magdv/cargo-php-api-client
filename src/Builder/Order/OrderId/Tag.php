<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/tag
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/tag
 */
final class Tag extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/tag';

    public function get(): TagGet
    {
        return new TagGet($this->client, $this->getUrl());
    }

    public function put(): TagPut
    {
        return new TagPut($this->client, $this->getUrl());
    }
}
