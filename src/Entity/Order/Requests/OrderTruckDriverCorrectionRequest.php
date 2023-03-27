<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-truck-driver-correction-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на изменение водителя или машины
 * source: order/requests/order-truck-driver-correction-request.json
 *
 * @property int $driverId
 * @property int[] $truckIds
 * @property string $comment
 */
final class OrderTruckDriverCorrectionRequest extends AbstractEntity
{
    protected static $types = ['driverId' => ['int'], 'truckIds' => ['array', 'int'], 'comment' => ['string']];
    protected static $nullables = ['driverId' => false, 'truckIds' => false, 'comment' => false];
}
