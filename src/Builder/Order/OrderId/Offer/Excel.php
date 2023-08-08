<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Offer;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/offer/excel
 */
final class Excel extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/offer/excel';

    public function get(): ExcelGet
    {
        return new ExcelGet($this->client, $this->getUrl());
    }
}
