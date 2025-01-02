<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект простоя по конкретному пункту погрузки/выгрузки заявки
 * source: order/OrderDowntimeClaim/objects/OrderDowntimePoint.json
 *
 * @property \stdClass $id
 * @property Downtime $downtime
 */
final class OrderDowntimePoint extends AbstractEntity
{
    protected static $types = [
        'id' => ['\stdClass'],
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
    ];

    protected static $nullables = ['id' => true, 'downtime' => false];
}
