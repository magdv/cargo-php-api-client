<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/publish
 */
final class Publish extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/publish';

    public function post(): PublishPost
    {
        return new PublishPost($this->client, $this->getUrl());
    }
}
