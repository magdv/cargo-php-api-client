<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Point;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/point/{pointId}
 */
final class PointId extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/point/{pointId}';

    public function get(): PointIdGet
    {
        return new PointIdGet($this->client, $this->getUrl());
    }

    public function patch(): PointIdPatch
    {
        return new PointIdPatch($this->client, $this->getUrl());
    }

    public function delete(): PointIdDelete
    {
        return new PointIdDelete($this->client, $this->getUrl());
    }
}
