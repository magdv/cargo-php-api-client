<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\Excel\OfferReport;

/**
 * url: /api/v2/order/excel
 */
final class Excel extends AbstractBuilder
{
    protected const URL = '/api/v2/order/excel';

    public function offerReport(): OfferReport
    {
        return new OfferReport($this->params, $this->client);
    }

    public function get(): ExcelGet
    {
        return new ExcelGet($this->client, $this->getUrl());
    }
}
