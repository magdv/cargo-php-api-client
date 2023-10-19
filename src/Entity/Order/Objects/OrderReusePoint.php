<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItemPenaltyCalculable;

/**
 * Данные маршрутного пункта в переразмещаемом экспедиторском заказе отправителя.
 * source: order/objects/order-reuse-point.json
 *
 * @property StoragePointItemPenaltyCalculable $storage
 * @property string $type
 * @property \stdClass $fromDate
 * @property \stdClass $fromTime
 * @property \stdClass $toDate
 * @property \stdClass $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property string $additionalInfo
 */
final class OrderReusePoint extends AbstractEntity
{
    protected static $types = [
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItemPenaltyCalculable'],
        'type' => ['string'],
        'fromDate' => ['\stdClass'],
        'fromTime' => ['\stdClass'],
        'toDate' => ['\stdClass'],
        'toTime' => ['\stdClass'],
        'isAccordingToWorkSchedule' => ['bool'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'storage' => false,
        'type' => false,
        'fromDate' => true,
        'fromTime' => true,
        'toDate' => true,
        'toTime' => true,
        'isAccordingToWorkSchedule' => false,
        'additionalInfo' => false,
    ];
}
