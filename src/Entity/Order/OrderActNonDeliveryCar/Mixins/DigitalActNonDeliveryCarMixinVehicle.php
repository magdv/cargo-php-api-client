<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Машина
 * source: order/OrderActNonDeliveryCar/mixins/DigitalActNonDeliveryCarMixin.json#/properties/vehicle
 *
 * @property string $truckManufacturer
 * @property string $truckNumber
 * @property string $trailerManufacturer
 * @property string $trailerNumber
 */
final class DigitalActNonDeliveryCarMixinVehicle extends AbstractEntity
{
    protected static $types = [
        'truckManufacturer' => ['string'],
        'truckNumber' => ['string'],
        'trailerManufacturer' => ['string'],
        'trailerNumber' => ['string'],
    ];

    protected static $nullables = [
        'truckManufacturer' => false,
        'truckNumber' => false,
        'trailerManufacturer' => false,
        'trailerNumber' => false,
    ];
}
