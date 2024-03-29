<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/expeditor-offer
 */
final class ExpeditorOffer extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/expeditor-offer';

    public function get(): ExpeditorOfferGet
    {
        return new ExpeditorOfferGet($this->client, $this->getUrl());
    }

    public function post(): ExpeditorOfferPost
    {
        return new ExpeditorOfferPost($this->client, $this->getUrl());
    }
}
