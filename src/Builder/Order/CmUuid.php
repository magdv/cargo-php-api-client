<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\CmUuid\ActNonDeliveryCar;
use Cargomart\ApiClient\Builder\Order\CmUuid\DigitalActNonDeliveryCar;
use Cargomart\ApiClient\Builder\Order\CmUuid\DigitalActNonDeliveryCarCancel;

/**
 * url: /api/v2/order/{cmUuid}
 */
final class CmUuid extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{cmUuid}';

    public function actNonDeliveryCar(): ActNonDeliveryCar
    {
        return new ActNonDeliveryCar($this->params, $this->client);
    }

    public function digitalActNonDeliveryCar(): DigitalActNonDeliveryCar
    {
        return new DigitalActNonDeliveryCar($this->params, $this->client);
    }

    public function digitalActNonDeliveryCarCancel(): DigitalActNonDeliveryCarCancel
    {
        return new DigitalActNonDeliveryCarCancel($this->params, $this->client);
    }
}
