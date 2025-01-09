<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на подписание заказа
 * source: order/Common/requests/order-sign-create-request.json
 *
 * @property int $driverId
 * @property int $truckId
 * @property string $token
 */
final class OrderSignCreateRequest extends AbstractEntity
{
    protected static $types = ['driverId' => ['int'], 'truckId' => ['int'], 'token' => ['string']];
    protected static $nullables = ['driverId' => false, 'truckId' => false, 'token' => false];
}
