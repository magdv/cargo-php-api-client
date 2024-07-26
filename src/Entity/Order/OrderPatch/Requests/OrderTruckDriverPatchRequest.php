<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPatch\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на изменение машины и водителя
 * source: order/OrderPatch/requests/order-truck-driver-patch-request.json
 *
 * @property int $driverId
 * @property int[] $truckIds
 * @property string $commentForConsignor
 */
final class OrderTruckDriverPatchRequest extends AbstractEntity
{
    protected static $types = ['driverId' => ['int'], 'truckIds' => ['array', 'int'], 'commentForConsignor' => ['string']];
    protected static $nullables = ['driverId' => false, 'truckIds' => false, 'commentForConsignor' => false];
}
