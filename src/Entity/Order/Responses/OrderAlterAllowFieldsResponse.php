<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком полей, которые можно отредактировать на заказ
 * source: order/responses/order-alter-allow-fields-response.json
 *
 * @property MessageV2[] $message
 * @property OrderAlterAllowFieldsResponseData $data
 */
final class OrderAlterAllowFieldsResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderAlterAllowFieldsResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
