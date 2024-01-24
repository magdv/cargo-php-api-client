<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Карточка заказа
 * source: order/responses/order-card-response.json
 *
 * @property OrderCardResponseData $data
 */
final class OrderCardResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderCardResponseData']];
    protected static $nullables = ['data' => false];
}
