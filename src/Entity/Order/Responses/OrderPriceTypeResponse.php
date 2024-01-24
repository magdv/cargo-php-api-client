<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Список типов цен заказа
 * source: order/responses/order-price-type-response.json
 *
 * @property OrderPriceTypeResponseData $data
 */
final class OrderPriceTypeResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderPriceTypeResponseData']];
    protected static $nullables = ['data' => false];
}
