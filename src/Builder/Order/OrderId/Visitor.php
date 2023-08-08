<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/visitor
 */
final class Visitor extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/visitor';

    public function get(): VisitorGet
    {
        return new VisitorGet($this->client, $this->getUrl());
    }
}
