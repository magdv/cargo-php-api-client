<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderPinItem;

/**
 * source: order/Common/responses/order-pin-response.json#/properties/data
 *
 * @property OrderPinItem $order
 */
final class OrderPinResponseData extends AbstractEntity
{
    protected static $types = ['order' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderPinItem']];
    protected static $nullables = ['order' => false];
}
