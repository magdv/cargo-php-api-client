<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ обновления данных ТС в заказе
 * source: order/responses/order-truck-response.json
 *
 * @property OrderTruckResponseData $data
 */
final class OrderTruckResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTruckResponseData']];
    protected static $nullables = ['data' => false];
}
