<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeInterval;
use Cargomart\ApiClient\Entity\Base\PriceValue;

/**
 * Объект простоя
 * source: order/OrderDowntimeClaim/objects/downtime.json
 *
 * @property PriceValue $fullHourCost
 * @property DateTimeInterval $interval
 * @property PriceValue $penaltySum
 */
final class Downtime extends AbstractEntity
{
    protected static $types = [
        'fullHourCost' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'interval' => ['Cargomart\ApiClient\Entity\Base\DateTimeInterval'],
        'penaltySum' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
    ];

    protected static $nullables = ['fullHourCost' => false, 'interval' => false, 'penaltySum' => false];
}
