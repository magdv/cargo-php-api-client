<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список клиентов из списка доступа
 * source: order/responses/order-point-edit-response.json
 *
 * @property MessageV2[] $message
 * @property OrderPointEditResponseData $data
 */
final class OrderPointEditResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPointEditResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
