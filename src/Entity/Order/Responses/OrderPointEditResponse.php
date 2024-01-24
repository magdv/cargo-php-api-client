<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список клиентов из списка доступа
 * source: order/responses/order-point-edit-response.json
 *
 * @property OrderPointEditResponseData $data
 */
final class OrderPointEditResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPointEditResponseData']];
    protected static $nullables = ['data' => false];
}
