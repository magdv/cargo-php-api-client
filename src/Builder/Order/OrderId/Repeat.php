<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/repeat
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/repeat
 */
final class Repeat extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/repeat';

    public function post(): RepeatPost
    {
        return new RepeatPost($this->client, $this->getUrl());
    }
}
