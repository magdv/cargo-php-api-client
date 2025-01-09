<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * Данные маршрутного пункта
 * source: order/Common/objects/order-route-point.json
 *
 * @property int $id
 * @property StoragePointItem $storage
 * @property string $type
 * @property string $additionalInfo
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 */
final class OrderRoutePoint extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'type' => ['string'],
        'additionalInfo' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'storage' => false,
        'type' => false,
        'additionalInfo' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
    ];
}
