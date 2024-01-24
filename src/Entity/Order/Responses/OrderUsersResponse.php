<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список пользователей и компаний для ответа
 * source: order/responses/order-users-response.json
 *
 * @property OrderUsersResponseData $data
 */
final class OrderUsersResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderUsersResponseData']];
    protected static $nullables = ['data' => false];
}
