<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос создания фильтра отправления
 * source: order/requests/tracking-edit.json
 *
 * @property string $departure
 * @property int $departureRadius
 * @property string $destination
 * @property int $destinationRadius
 * @property bool $withReverse
 * @property bool $isActive
 * @property float $weightFrom
 * @property float $weightTo
 * @property int $capacityFrom
 * @property int $capacityTo
 * @property string $consignor
 * @property int[] $truckType
 * @property bool $trackTenderLots
 * @property bool $trackOrders
 */
final class TrackingEdit extends AbstractEntity
{
    protected static $types = [
        'departure' => ['string'],
        'departureRadius' => ['int'],
        'destination' => ['string'],
        'destinationRadius' => ['int'],
        'withReverse' => ['bool'],
        'isActive' => ['bool'],
        'weightFrom' => ['float'],
        'weightTo' => ['float'],
        'capacityFrom' => ['int'],
        'capacityTo' => ['int'],
        'consignor' => ['string'],
        'truckType' => ['array', 'int'],
        'trackTenderLots' => ['bool'],
        'trackOrders' => ['bool'],
    ];

    protected static $nullables = [
        'departure' => false,
        'departureRadius' => false,
        'destination' => false,
        'destinationRadius' => false,
        'withReverse' => false,
        'isActive' => false,
        'weightFrom' => false,
        'weightTo' => false,
        'capacityFrom' => false,
        'capacityTo' => false,
        'consignor' => false,
        'truckType' => false,
        'trackTenderLots' => false,
        'trackOrders' => false,
    ];
}
