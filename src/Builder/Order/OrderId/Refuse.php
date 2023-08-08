<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/refuse
 */
final class Refuse extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/refuse';

    public function post(): RefusePost
    {
        return new RefusePost($this->client, $this->getUrl());
    }
}
