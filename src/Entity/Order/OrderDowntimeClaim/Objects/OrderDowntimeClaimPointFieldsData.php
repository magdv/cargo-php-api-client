<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\DateTimeSeparateRequired;

/**
 * Данные претензии о простое по конкретной точке
 * source: order/OrderDowntimeClaim/objects/OrderDowntimeClaimPointFields.json#/properties/data
 *
 * @property DateTimeSeparateRequired $actualArrival
 * @property DateTimeSeparateRequired $actualDeparture
 * @property \stdClass $reason
 */
final class OrderDowntimeClaimPointFieldsData extends AbstractEntity
{
    protected static $types = [
        'actualArrival' => ['Cargomart\ApiClient\Entity\Base\DateTimeSeparateRequired'],
        'actualDeparture' => ['Cargomart\ApiClient\Entity\Base\DateTimeSeparateRequired'],
        'reason' => ['\stdClass'],
    ];

    protected static $nullables = ['actualArrival' => false, 'actualDeparture' => false, 'reason' => true];
}
