<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: truck/objects/vehicle.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные о прицепе/фургоне
 * source: truck/objects/vehicle.json
 *
 * @property string $manufacturer
 * @property string $number
 * @property float $carryingCapacity
 * @property float $cubicCapacity
 * @property int $typeId
 * @property string $registrationCountryCode
 * @property string $ownershipType
 * @property VehicleOwner $vehicleOwner
 */
final class Vehicle extends AbstractEntity
{
    protected static $types = [
        'manufacturer' => ['string'],
        'number' => ['string'],
        'carryingCapacity' => ['float'],
        'cubicCapacity' => ['float'],
        'typeId' => ['int'],
        'registrationCountryCode' => ['string'],
        'ownershipType' => ['string'],
        'vehicleOwner' => ['Cargomart\ApiClient\Entity\Truck\Objects\VehicleOwner'],
    ];

    protected static $nullables = [
        'manufacturer' => false,
        'number' => false,
        'carryingCapacity' => false,
        'cubicCapacity' => false,
        'typeId' => false,
        'registrationCountryCode' => false,
        'ownershipType' => false,
        'vehicleOwner' => false,
    ];
}
