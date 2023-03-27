<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order-refuse-reason
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-refuse-reason
 */
final class OrderRefuseReason extends AbstractBuilder
{
    protected const URL = '/api/v2/order-refuse-reason';

    public function get(): OrderRefuseReasonGet
    {
        return new OrderRefuseReasonGet($this->client, $this->getUrl());
    }
}
