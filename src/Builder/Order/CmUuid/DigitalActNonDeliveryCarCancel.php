<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\CmUuid;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{cmUuid}/digital-act-non-delivery-car-cancel
 */
final class DigitalActNonDeliveryCarCancel extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{cmUuid}/digital-act-non-delivery-car-cancel';

    public function post(): DigitalActNonDeliveryCarCancelPost
    {
        return new DigitalActNonDeliveryCarCancelPost($this->client, $this->getUrl());
    }
}
