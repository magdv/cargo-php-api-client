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
 * source: order/responses/order-edit-response.json
 *
 * @property OrderEditResponseData $data
 */
final class OrderEditResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderEditResponseData']];
    protected static $nullables = ['data' => false];
}
