<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/car-park.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Автопарк перевозчика
 * source: company/objects/car-park.json
 *
 * @property bool $isInsurance
 * @property bool $isImr
 * @property bool $isTrackingGps
 * @property InfoCarrierCar[] $cars
 * @property CarParkAccess $access
 */
final class CarPark extends AbstractEntity
{
    protected static $types = [
        'isInsurance' => ['bool'],
        'isImr' => ['bool'],
        'isTrackingGps' => ['bool'],
        'cars' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\InfoCarrierCar'],
        'access' => ['Cargomart\ApiClient\Entity\Company\Objects\CarParkAccess'],
    ];

    protected static $nullables = [
        'isInsurance' => false,
        'isImr' => false,
        'isTrackingGps' => false,
        'cars' => false,
        'access' => false,
    ];
}
