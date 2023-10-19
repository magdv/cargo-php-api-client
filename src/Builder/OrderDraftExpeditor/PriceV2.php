<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order-draft-expeditor/price-v2
 */
final class PriceV2 extends AbstractBuilder
{
    protected const URL = '/api/v2/order-draft-expeditor/price-v2';

    public function get(): PriceV2Get
    {
        return new PriceV2Get($this->client, $this->getUrl());
    }
}
