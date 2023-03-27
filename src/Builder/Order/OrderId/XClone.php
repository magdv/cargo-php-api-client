<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/clone
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/clone
 */
final class XClone extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/clone';

    public function post(): XClonePost
    {
        return new XClonePost($this->client, $this->getUrl());
    }
}
