<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/comment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Comment\Id;

/**
 * url: /api/v2/order/{orderId}/comment
 */
final class Comment extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/comment';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): CommentGet
    {
        return new CommentGet($this->client, $this->getUrl());
    }

    public function post(): CommentPost
    {
        return new CommentPost($this->client, $this->getUrl());
    }
}
