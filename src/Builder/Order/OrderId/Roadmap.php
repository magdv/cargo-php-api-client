<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/roadmap
 */
final class Roadmap extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/roadmap';

    public function get(): RoadmapGet
    {
        return new RoadmapGet($this->client, $this->getUrl());
    }
}
