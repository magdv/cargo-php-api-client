<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDriver;
use Cargomart\ApiClient\Entity\Order\Objects\OrderTruck;

/**
 * Информация по запросу на изменение машины и водителя
 * source: order/OrderPatch/objects/order-truck-driver-patch-diff-item.json
 *
 * @property string $type
 * @property OrderTruck $truck
 * @property OrderDriver $driver
 */
final class OrderTruckDriverPatchDiffItem extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver'],
    ];

    protected static $nullables = ['type' => false, 'truck' => false, 'driver' => false];
}
