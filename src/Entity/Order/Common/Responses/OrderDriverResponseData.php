<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDriver;

/**
 * source: order/Common/responses/order-driver-response.json#/properties/data
 *
 * @property OrderDriver $driver
 */
final class OrderDriverResponseData extends AbstractEntity
{
    protected static $types = ['driver' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDriver']];
    protected static $nullables = ['driver' => false];
}
