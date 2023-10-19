<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/reuse
 */
final class Reuse extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/reuse';

    public function post(): ReusePost
    {
        return new ReusePost($this->client, $this->getUrl());
    }
}
