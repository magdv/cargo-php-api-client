<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с количеством заказов
 * source: order/responses/order-count-response.json
 *
 * @property MessageV2[] $message
 * @property OrderCountResponseData $data
 */
final class OrderCountResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCountResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
