<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Tms\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступность машин на дату, какое количество и по какой цене
 * source: tms/objects/tms-input-element.json#/properties/availability
 *
 * @property string $date
 * @property int $availableTrucks
 * @property int $truckType
 * @property string $orderType
 * @property int $travelTime
 * @property string $price
 */
final class TmsInputElementAvailability extends AbstractEntity
{
    protected static $types = [
        'date' => ['string'],
        'availableTrucks' => ['int'],
        'truckType' => ['int'],
        'orderType' => ['string'],
        'travelTime' => ['int'],
        'price' => ['string'],
    ];

    protected static $nullables = [
        'date' => false,
        'availableTrucks' => false,
        'truckType' => false,
        'orderType' => false,
        'travelTime' => false,
        'price' => false,
    ];
}
