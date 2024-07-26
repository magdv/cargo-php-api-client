<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект простоя по конкретному пункту погрузки/выгрузки заявки
 * source: order/OrderDowntimeClaim/objects/order-downtime-claim-point.json
 *
 * @property Downtime $downtime
 * @property \stdClass $id
 * @property OrderDowntimeClaimPointFieldsData $data
 */
final class OrderDowntimeClaimPoint extends AbstractEntity
{
    protected static $types = [
        'downtime' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\Downtime'],
        'id' => ['\stdClass'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPointFieldsData'],
    ];

    protected static $nullables = ['downtime' => false, 'id' => true, 'data' => false];
}
