<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/sign
 */
final class Sign extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/sign';

    public function post(): SignPost
    {
        return new SignPost($this->client, $this->getUrl());
    }
}
