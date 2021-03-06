<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список идентификаторов заказов
 * source: order/responses/order-ids-response.json
 *
 * @property MessageV2[] $message
 * @property OrderIdsResponseData $data
 */
final class OrderIdsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderIdsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
