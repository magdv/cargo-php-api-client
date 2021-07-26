<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/consignor-contact
 */
final class ConsignorContact extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/consignor-contact';

    public function put(): ConsignorContactPut
    {
        return new ConsignorContactPut($this->client, $this->getUrl());
    }
}
