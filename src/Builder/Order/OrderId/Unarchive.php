<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/unarchive
 */
final class Unarchive extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/unarchive';

    public function post(): UnarchivePost
    {
        return new UnarchivePost($this->client, $this->getUrl());
    }
}
