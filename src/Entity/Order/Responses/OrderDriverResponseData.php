<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-driver-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDriver;

/**
 * source: order/responses/order-driver-response.json#/properties/data
 *
 * @property OrderDriver $driver
 */
final class OrderDriverResponseData extends AbstractEntity
{
    protected static $types = ['driver' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDriver']];
    protected static $nullables = ['driver' => false];
}
