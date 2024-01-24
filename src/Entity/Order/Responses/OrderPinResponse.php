<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Информация о статусе закрепления заказа
 * source: order/responses/order-pin-response.json
 *
 * @property OrderPinResponseData $data
 */
final class OrderPinResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPinResponseData']];
    protected static $nullables = ['data' => false];
}
