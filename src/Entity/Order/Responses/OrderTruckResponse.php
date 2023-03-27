<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-truck-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ обновления данных ТС в заказе
 * source: order/responses/order-truck-response.json
 *
 * @property MessageV2[] $message
 * @property OrderTruckResponseData $data
 */
final class OrderTruckResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderTruckResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
