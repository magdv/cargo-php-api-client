<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-refuse-reasons-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список причин для отказа от заказа
 * source: order/responses/order-refuse-reasons-response.json
 *
 * @property MessageV2[] $message
 * @property OrderRefuseReasonsResponseData $data
 */
final class OrderRefuseReasonsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderRefuseReasonsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
