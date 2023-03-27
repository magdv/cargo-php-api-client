<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/comment/{id}/reply
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Comment\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/comment/{id}/reply
 */
final class Reply extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/comment/{id}/reply';

    public function post(): ReplyPost
    {
        return new ReplyPost($this->client, $this->getUrl());
    }
}
