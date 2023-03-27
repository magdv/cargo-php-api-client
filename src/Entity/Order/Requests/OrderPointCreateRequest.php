<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-point-create-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на создание маршрутной точки
 * source: order/requests/order-point-create-request.json
 *
 * @property int $prevId
 */
final class OrderPointCreateRequest extends AbstractEntity
{
    protected static $types = ['prevId' => ['int']];
    protected static $nullables = ['prevId' => false];
}
