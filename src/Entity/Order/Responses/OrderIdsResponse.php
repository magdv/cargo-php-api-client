<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список идентификаторов заказов
 * source: order/responses/order-ids-response.json
 *
 * @property OrderIdsResponseData $data
 */
final class OrderIdsResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderIdsResponseData']];
    protected static $nullables = ['data' => false];
}
