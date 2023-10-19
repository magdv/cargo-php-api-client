<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/customer-patch
 */
final class CustomerPatch extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/customer-patch';

    public function post(): CustomerPatchPost
    {
        return new CustomerPatchPost($this->client, $this->getUrl());
    }
}
