<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/point-diff
 */
final class PointDiff extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/point-diff';

    public function get(): PointDiffGet
    {
        return new PointDiffGet($this->client, $this->getUrl());
    }
}
