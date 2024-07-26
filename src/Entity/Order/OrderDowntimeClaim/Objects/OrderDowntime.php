<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект простоя по заявке
 * source: order/OrderDowntimeClaim/objects/order-downtime.json
 *
 * @property OrderDowntimePoint[] $points
 * @property Downtime $downtime
 */
final class OrderDowntime extends AbstractEntity
{
    protected static $types = [
        'points' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimePoint'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
    ];

    protected static $nullables = ['points' => false, 'downtime' => false];
}
