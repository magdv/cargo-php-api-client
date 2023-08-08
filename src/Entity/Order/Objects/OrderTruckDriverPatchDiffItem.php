<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по запросу на изменение машины и водителя
 * source: order/objects/order-truck-driver-patch-diff-item.json
 *
 * @property OrderTruck $truck
 * @property OrderDriver $driver
 */
final class OrderTruckDriverPatchDiffItem extends AbstractEntity
{
    protected static $types = [
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
        'driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver'],
    ];

    protected static $nullables = ['truck' => false, 'driver' => false];
}
