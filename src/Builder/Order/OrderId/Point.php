<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Point\PointId;
use Cargomart\ApiClient\Builder\Order\OrderId\Point\Swap;

/**
 * url: /api/v2/order/{orderId}/point
 */
final class Point extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/point';

    public function swap(): Swap
    {
        return new Swap($this->params, $this->client);
    }

    public function pointId(int $pointId): PointId
    {
        $params = $this->params;
        $params['pointId'] = $pointId;
        return new PointId($params, $this->client);
    }

    public function post(): PointPost
    {
        return new PointPost($this->client, $this->getUrl());
    }
}
