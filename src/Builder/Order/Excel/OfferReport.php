<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/excel/offer-report
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Excel;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/excel/offer-report
 */
final class OfferReport extends AbstractBuilder
{
    protected const URL = '/api/v2/order/excel/offer-report';

    public function get(): OfferReportGet
    {
        return new OfferReportGet($this->client, $this->getUrl());
    }
}
