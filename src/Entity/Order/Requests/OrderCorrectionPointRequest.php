<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * Данные для редактирования пункта маршрута
 * source: order/requests/order-correction-point-request.json
 *
 * @property int $id
 * @property StoragePointItem $storage
 * @property int $storagePointId
 * @property bool $isLoad
 * @property bool $isUnload
 * @property \stdClass $fromDate
 * @property \stdClass $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property string $additionalInfo
 */
final class OrderCorrectionPointRequest extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'storagePointId' => ['int'],
        'isLoad' => ['bool'],
        'isUnload' => ['bool'],
        'fromDate' => ['\stdClass'],
        'fromTime' => ['\stdClass'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'storage' => false,
        'storagePointId' => false,
        'isLoad' => false,
        'isUnload' => false,
        'fromDate' => true,
        'fromTime' => true,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
        'additionalInfo' => false,
    ];
}
