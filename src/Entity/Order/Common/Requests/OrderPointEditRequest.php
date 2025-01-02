<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для редактирования пункта маршрута
 * source: order/Common/requests/order-point-edit-request.json
 *
 * @property int $id
 * @property int $storagePointId
 * @property bool $isLoad
 * @property bool $isUnload
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property string $additionalInfo
 */
final class OrderPointEditRequest extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storagePointId' => ['int'],
        'isLoad' => ['bool'],
        'isUnload' => ['bool'],
        'fromDate' => ['string'],
        'toDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'storagePointId' => false,
        'isLoad' => false,
        'isUnload' => false,
        'fromDate' => false,
        'toDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
        'additionalInfo' => false,
    ];
}
