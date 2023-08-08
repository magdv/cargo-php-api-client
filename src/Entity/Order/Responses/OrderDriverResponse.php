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
 * Ответ обновления данных водителя в заказе
 * source: order/responses/order-driver-response.json
 *
 * @property MessageV2[] $message
 * @property OrderDriverResponseData $data
 */
final class OrderDriverResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDriverResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
