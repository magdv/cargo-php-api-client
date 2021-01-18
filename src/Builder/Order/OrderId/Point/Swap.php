<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Point;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/point/swap
 */
final class Swap extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/point/swap';

    public function post(): SwapPost
    {
        return new SwapPost($this->client, $this->getUrl());
    }
}
