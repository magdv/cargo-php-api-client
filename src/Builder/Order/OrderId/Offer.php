<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/offer
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Offer\Excel;

/**
 * url: /api/v2/order/{orderId}/offer
 */
final class Offer extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/offer';

    public function excel(): Excel
    {
        return new Excel($this->params, $this->client);
    }

    public function post(): OfferPost
    {
        return new OfferPost($this->client, $this->getUrl());
    }

    public function get(): OfferGet
    {
        return new OfferGet($this->client, $this->getUrl());
    }
}
