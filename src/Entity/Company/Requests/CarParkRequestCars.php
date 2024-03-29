<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о машинах компании-перевозчика
 * source: company/requests/car-park-request.json#/properties/cars
 *
 * @property int $truckTypeId
 * @property int $cubicCapacity
 * @property int $carryingCapacity
 * @property bool $isThermograph
 * @property string $ownershipType
 * @property int $count
 */
final class CarParkRequestCars extends AbstractEntity
{
    protected static $types = [
        'truckTypeId' => ['int'],
        'cubicCapacity' => ['int'],
        'carryingCapacity' => ['int'],
        'isThermograph' => ['bool'],
        'ownershipType' => ['string'],
        'count' => ['int'],
    ];

    protected static $nullables = [
        'truckTypeId' => false,
        'cubicCapacity' => false,
        'carryingCapacity' => false,
        'isThermograph' => false,
        'ownershipType' => false,
        'count' => false,
    ];
}
