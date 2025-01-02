<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\CmUuid;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{cmUuid}/digital-act-non-delivery-car
 */
final class DigitalActNonDeliveryCar extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{cmUuid}/digital-act-non-delivery-car';

    public function post(): DigitalActNonDeliveryCarPost
    {
        return new DigitalActNonDeliveryCarPost($this->client, $this->getUrl());
    }

    public function get(): DigitalActNonDeliveryCarGet
    {
        return new DigitalActNonDeliveryCarGet($this->client, $this->getUrl());
    }
}
