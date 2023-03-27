<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/archive
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/archive
 */
final class Archive extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/archive';

    public function post(): ArchivePost
    {
        return new ArchivePost($this->client, $this->getUrl());
    }
}
