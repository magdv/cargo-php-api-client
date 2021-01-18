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
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
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
        'fromDate' => ['string'],
        'toDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'storage' => false,
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
