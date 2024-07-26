<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-conditions
 */
final class OrderConditions extends AbstractBuilder
{
    protected const URL = '/api/v2/order-conditions';

    public function get(): OrderConditionsGet
    {
        return new OrderConditionsGet($this->client, $this->getUrl());
    }
}
