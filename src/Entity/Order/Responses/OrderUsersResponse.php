<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-users-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Список пользователей и компаний для ответа
 * source: order/responses/order-users-response.json
 *
 * @property MessageV2[] $message
 * @property OrderUsersResponseData $data
 */
final class OrderUsersResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderUsersResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
