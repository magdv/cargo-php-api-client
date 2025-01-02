<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на перемещение маршрутных точек
 * source: order/Common/requests/order-point-edit-swap-request.json
 *
 * @property int $pointId
 * @property int $prevId
 */
final class OrderPointEditSwapRequest extends AbstractEntity
{
    protected static $types = ['pointId' => ['int'], 'prevId' => ['int']];
    protected static $nullables = ['pointId' => false, 'prevId' => false];
}
