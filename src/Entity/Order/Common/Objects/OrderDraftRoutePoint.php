<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * Данные для редактирования пункта маршрута
 * source: order/Common/objects/order-draft-route-point.json
 *
 * @property int $id
 * @property StoragePointItem $storage
 * @property string $type
 * @property string $fromDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property string $additionalInfo
 */
final class OrderDraftRoutePoint extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'type' => ['string'],
        'fromDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'storage' => false,
        'type' => false,
        'fromDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
        'additionalInfo' => false,
    ];
}
