<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Претензия о простое по конкретному пункту погрузки/выгрузки заявки
 * source: order/OrderDowntimeClaim/objects/order-downtime-claim-point-fields.json
 *
 * @property \stdClass $id
 * @property OrderDowntimeClaimPointFieldsData $data
 */
final class OrderDowntimeClaimPointFields extends AbstractEntity
{
    protected static $types = [
        'id' => ['\stdClass'],
        'data' => ['Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaimPointFieldsData'],
    ];

    protected static $nullables = ['id' => true, 'data' => false];
}
