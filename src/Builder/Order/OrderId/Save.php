<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/save
 */
final class Save extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/save';

    public function post(): SavePost
    {
        return new SavePost($this->client, $this->getUrl());
    }
}
