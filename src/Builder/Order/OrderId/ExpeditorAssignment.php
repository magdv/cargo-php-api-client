<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/expeditor-assignment
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-assignment
 */
final class ExpeditorAssignment extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-assignment';

    public function get(): ExpeditorAssignmentGet
    {
        return new ExpeditorAssignmentGet($this->client, $this->getUrl());
    }
}
