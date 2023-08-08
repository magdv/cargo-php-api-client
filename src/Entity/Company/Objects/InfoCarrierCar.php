<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о машине компании-перевозчика
 * source: company/objects/info-carrier-car.json
 *
 * @property int $id
 * @property int $truckTypeId
 * @property int $cubicCapacity
 * @property int $carryingCapacity
 * @property bool $isThermograph
 * @property string $ownershipType
 * @property int $count
 */
final class InfoCarrierCar extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'truckTypeId' => ['int'],
        'cubicCapacity' => ['int'],
        'carryingCapacity' => ['int'],
        'isThermograph' => ['bool'],
        'ownershipType' => ['string'],
        'count' => ['int'],
    ];

    protected static $nullables = [
        'id' => false,
        'truckTypeId' => false,
        'cubicCapacity' => false,
        'carryingCapacity' => false,
        'isThermograph' => false,
        'ownershipType' => false,
        'count' => false,
    ];
}
