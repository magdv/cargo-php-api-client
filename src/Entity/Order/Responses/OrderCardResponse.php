<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Карточка заказа
 * source: order/responses/order-card-response.json
 *
 * @property MessageV2[] $message
 * @property OrderCardResponseData $data
 */
final class OrderCardResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
