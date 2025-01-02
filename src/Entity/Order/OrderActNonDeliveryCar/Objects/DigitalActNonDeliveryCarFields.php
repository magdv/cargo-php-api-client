<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins\DigitalActNonDeliveryCarMixinDriver;
use Cargomart\ApiClient\Entity\Order\OrderActNonDeliveryCar\Mixins\DigitalActNonDeliveryCarMixinVehicle;

/**
 * Поля электронного акта о неподаче машины
 * source: order/OrderActNonDeliveryCar/objects/DigitalActNonDeliveryCarFields.json
 *
 * @property string $createDate
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
 * @property string $date
 * @property string $number
 */
final class DigitalActNonDeliveryCarFields extends AbstractEntity
{
    protected static $types = [
        'createDate' => ['string'],
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
        'date' => ['string'],
        'number' => ['string'],
    ];

    protected static $nullables = [
        'createDate' => false,
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
        'date' => false,
        'number' => false,
    ];
}
