<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * Данные маршрутного пункта
 * source: order/objects/order-draft-ftl-point.json
 *
 * @property StoragePointItem $storage
 * @property string $type
 * @property string $additionalInfo
 * @property string $onDate
 * @property string $fromTime
 * @property string $toTime
 */
final class OrderDraftFtlPoint extends AbstractEntity
{
    protected static $types = [
        'storage' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'type' => ['string'],
        'additionalInfo' => ['string'],
        'onDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
    ];

    protected static $nullables = [
        'storage' => false,
        'type' => false,
        'additionalInfo' => false,
        'onDate' => false,
        'fromTime' => false,
        'toTime' => false,
    ];
}
