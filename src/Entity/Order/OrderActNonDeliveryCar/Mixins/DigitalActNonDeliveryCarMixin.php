<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarCompany;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarOrder;

/**
 * Базовые поля электронного акта о неподаче машины
 * source: order/OrderActNonDeliveryCar/mixins/DigitalActNonDeliveryCarMixin.json
 *
 * @property string $orderId
 * @property string $settlementName
 * @property string $shipmentFailureType
 * @property string $reason
 * @property DigitalActNonDeliveryCarCompany $shipper
 * @property DigitalActNonDeliveryCarCompany $consignee
 * @property DigitalActNonDeliveryCarCompany $expeditor
 * @property DigitalActNonDeliveryCarCompany $carrier
 * @property DigitalActNonDeliveryCarOrder $order
 * @property DigitalActNonDeliveryCarMixinVehicle $vehicle
 * @property DigitalActNonDeliveryCarMixinDriver $driver
 */
final class DigitalActNonDeliveryCarMixin extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['string'],
        'settlementName' => ['string'],
        'shipmentFailureType' => ['string'],
        'reason' => ['string'],
        'shipper' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarCompany'],
        'consignee' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarCompany'],
        'expeditor' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarCompany'],
        'carrier' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarCompany'],
        'order' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects\DigitalActNonDeliveryCarOrder'],
        'vehicle' => [
            'Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins\DigitalActNonDeliveryCarMixinVehicle',
        ],
        'driver' => ['Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins\DigitalActNonDeliveryCarMixinDriver'],
    ];

    protected static $nullables = [
        'orderId' => false,
        'settlementName' => false,
        'shipmentFailureType' => false,
        'reason' => false,
        'shipper' => false,
        'consignee' => false,
        'expeditor' => false,
        'carrier' => false,
        'order' => false,
        'vehicle' => false,
        'driver' => false,
    ];
}
