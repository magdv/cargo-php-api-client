<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на подписание заказа
 * source: order/requests/order-sign-create-request.json
 *
 * @property int $driverId
 * @property int $truckId
 */
final class OrderSignCreateRequest extends AbstractEntity
{
    protected static $types = ['driverId' => ['int'], 'truckId' => ['int']];
    protected static $nullables = ['driverId' => false, 'truckId' => false];
}
