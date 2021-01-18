<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для редактирования пункта маршрута
 * source: order/requests/order-point-edit-request.json
 *
 * @property int $id
 * @property int $storagePointId
 * @property bool $isLoad
 * @property bool $isUnload
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
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
        'additionalInfo' => false,
    ];
}
