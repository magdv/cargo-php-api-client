<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Задание водителя и машины для заказа
 * source: order/requests/truck-driver.json
 *
 * @property int $driverId
 * @property int[] $truckIds
 */
final class TruckDriver extends AbstractEntity
{
    protected static $types = ['driverId' => ['int'], 'truckIds' => ['array', 'int']];
    protected static $nullables = ['driverId' => false, 'truckIds' => false];
}
