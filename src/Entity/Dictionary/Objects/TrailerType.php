<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Типы прицепов, список активных позиций (isActive = true)
 * source: dictionary/objects/trailer-type.json
 *
 * @property string $id
 * @property int $truckTypeId
 * @property string $name
 * @property string $capacity
 * @property string $weight
 * @property bool $cmPriceEnabled
 */
final class TrailerType extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'truckTypeId' => ['int'],
        'name' => ['string'],
        'capacity' => ['string'],
        'weight' => ['string'],
        'cmPriceEnabled' => ['bool'],
    ];

    protected static $nullables = [
        'id' => false,
        'truckTypeId' => false,
        'name' => false,
        'capacity' => false,
        'weight' => false,
        'cmPriceEnabled' => false,
    ];
}
