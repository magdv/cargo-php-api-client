<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\CmUuid;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{cmUuid}/act-non-delivery-car
 */
final class ActNonDeliveryCar extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{cmUuid}/act-non-delivery-car';

    public function get(): ActNonDeliveryCarGet
    {
        return new ActNonDeliveryCarGet($this->client, $this->getUrl());
    }
}
