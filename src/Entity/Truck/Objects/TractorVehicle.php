<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные о тягаче
 * source: truck/objects/tractor-vehicle.json
 *
 * @property string $manufacturer
 * @property string $number
 * @property string $registrationCountryCode
 * @property string $ownershipType
 * @property VehicleOwner $vehicleOwner
 */
final class TractorVehicle extends AbstractEntity
{
    protected static $types = [
        'manufacturer' => ['string'],
        'number' => ['string'],
        'registrationCountryCode' => ['string'],
        'ownershipType' => ['string'],
        'vehicleOwner' => ['Cargomart\ApiClient\Entity\Truck\Objects\VehicleOwner'],
    ];

    protected static $nullables = [
        'manufacturer' => false,
        'number' => false,
        'registrationCountryCode' => false,
        'ownershipType' => false,
        'vehicleOwner' => false,
    ];
}
