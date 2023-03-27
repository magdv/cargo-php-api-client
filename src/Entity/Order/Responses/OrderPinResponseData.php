<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-pin-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPinItem;

/**
 * source: order/responses/order-pin-response.json#/properties/data
 *
 * @property OrderPinItem $order
 */
final class OrderPinResponseData extends AbstractEntity
{
    protected static $types = ['order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPinItem']];
    protected static $nullables = ['order' => false];
}
