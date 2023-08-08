<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/edit
 */
final class Edit extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/edit';

    public function get(): EditGet
    {
        return new EditGet($this->client, $this->getUrl());
    }
}
