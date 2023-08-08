<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;

/**
 * Информация о грузе и погрузке из титула отправителя
 * source: simple-document/objects/payload-chunk-cargo.json
 *
 * @property string $description
 * @property string $truckType
 * @property float $weight
 * @property int $capacity
 * @property float $loadWeight
 * @property int $loadCapacity
 * @property TemperatureRange $temperature
 * @property int[] $loading
 * @property string $loadingType
 * @property string $truckConditions
 * @property string $truckDevices
 * @property string $additionalInfo
 */
final class PayloadChunkCargo extends AbstractEntity
{
    protected static $types = [
        'description' => ['string'],
        'truckType' => ['string'],
        'weight' => ['float'],
        'capacity' => ['int'],
        'loadWeight' => ['float'],
        'loadCapacity' => ['int'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
        'loading' => ['array', 'int'],
        'loadingType' => ['string'],
        'truckConditions' => ['string'],
        'truckDevices' => ['string'],
        'additionalInfo' => ['string'],
    ];

    protected static $nullables = [
        'description' => false,
        'truckType' => false,
        'weight' => false,
        'capacity' => false,
        'loadWeight' => false,
        'loadCapacity' => false,
        'temperature' => false,
        'loading' => false,
        'loadingType' => false,
        'truckConditions' => false,
        'truckDevices' => false,
        'additionalInfo' => false,
    ];
}
