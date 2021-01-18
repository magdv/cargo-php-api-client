<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderFieldList;

/**
 * source: order/responses/order-alter-allow-fields-response.json#/properties/data
 *
 * @property OrderFieldList $order
 */
final class OrderAlterAllowFieldsResponseData extends AbstractEntity
{
    protected static $types = ['order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderFieldList']];
    protected static $nullables = ['order' => false];
}
