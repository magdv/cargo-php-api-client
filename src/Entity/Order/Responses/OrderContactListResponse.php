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
 * source: order/responses/order-contact-list-response.json
 *
 * @property OrderContactListResponseData $data
 */
final class OrderContactListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderContactListResponseData']];
    protected static $nullables = ['data' => false];
}
