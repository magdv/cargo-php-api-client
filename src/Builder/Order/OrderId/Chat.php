<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/chat
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Chat\Type;

/**
 * url: /api/v2/order/{orderId}/chat
 */
final class Chat extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/chat';

    public function type(string $type): Type
    {
        $params = $this->params;
        $params['type'] = $type;
        return new Type($params, $this->client);
    }

    public function get(): ChatGet
    {
        return new ChatGet($this->client, $this->getUrl());
    }
}
