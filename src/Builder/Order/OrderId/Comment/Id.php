<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Comment;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Comment\Id\Reply;

/**
 * url: /api/v2/order/{orderId}/comment/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/comment/{id}';

    public function reply(): Reply
    {
        return new Reply($this->params, $this->client);
    }
}
