<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-truck-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderTruck;

/**
 * source: order/responses/order-truck-response.json#/properties/data
 *
 * @property OrderTruck[] $trucks
 */
final class OrderTruckResponseData extends AbstractEntity
{
    protected static $types = ['trucks' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderTruck']];
    protected static $nullables = ['trucks' => false];
}
