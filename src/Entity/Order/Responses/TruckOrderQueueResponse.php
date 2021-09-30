<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Получение списка заказов в очереди для выбранной машины
 * source: order/responses/truck-order-queue-response.json
 *
 * @property MessageV2[] $message
 * @property TruckOrderQueueResponseData $data
 */
final class TruckOrderQueueResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\TruckOrderQueueResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
