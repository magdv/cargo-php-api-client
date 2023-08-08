<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/carrier-contact
 */
final class CarrierContact extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/carrier-contact';

    public function patch(): CarrierContactPatch
    {
        return new CarrierContactPatch($this->client, $this->getUrl());
    }
}
