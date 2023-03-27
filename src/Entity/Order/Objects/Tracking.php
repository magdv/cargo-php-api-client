<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/tracking.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект отслеживания заказов
 * source: order/objects/tracking.json
 *
 * @property int $id
 * @property bool $isActive
 * @property string $departure
 * @property int $departureRadius
 * @property string $destination
 * @property int $destinationRadius
 * @property bool $withReverse
 * @property float $weightFrom
 * @property float $weightTo
 * @property int $capacityFrom
 * @property int $capacityTo
 * @property string $consignor
 * @property int[] $truckType
 * @property bool $trackOrders
 * @property bool $trackTenderLots
 * @property TrackingAccess $access
 */
final class Tracking extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'isActive' => ['bool'],
        'departure' => ['string'],
        'departureRadius' => ['int'],
        'destination' => ['string'],
        'destinationRadius' => ['int'],
        'withReverse' => ['bool'],
        'weightFrom' => ['float'],
        'weightTo' => ['float'],
        'capacityFrom' => ['int'],
        'capacityTo' => ['int'],
        'consignor' => ['string'],
        'truckType' => ['array', 'int'],
        'trackOrders' => ['bool'],
        'trackTenderLots' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\TrackingAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'isActive' => false,
        'departure' => false,
        'departureRadius' => false,
        'destination' => false,
        'destinationRadius' => false,
        'withReverse' => false,
        'weightFrom' => false,
        'weightTo' => false,
        'capacityFrom' => false,
        'capacityTo' => false,
        'consignor' => false,
        'truckType' => false,
        'trackOrders' => false,
        'trackTenderLots' => false,
        'access' => false,
    ];
}
