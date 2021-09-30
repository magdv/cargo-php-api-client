<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Данные запроса на изменение заказа
 * source: order/responses/order-correction-response.json
 *
 * @property MessageV2[] $message
 * @property OrderCorrectionResponseData $data
 */
final class OrderCorrectionResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
