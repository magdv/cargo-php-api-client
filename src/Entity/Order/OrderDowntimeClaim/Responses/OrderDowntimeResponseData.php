<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntime;

/**
 * source: order/OrderDowntimeClaim/responses/OrderDowntimeResponse.json#/properties/data
 *
 * @property OrderDowntime $orderDowntime
 */
final class OrderDowntimeResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDowntime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntime'],
    ];

    protected static $nullables = ['orderDowntime' => false];
}
