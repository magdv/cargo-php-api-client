<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Chat;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/chat/{type}
 */
final class Type extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/chat/{type}';

    public function post(): TypePost
    {
        return new TypePost($this->client, $this->getUrl());
    }
}
