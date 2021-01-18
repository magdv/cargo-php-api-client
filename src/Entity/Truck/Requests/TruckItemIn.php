<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * объект с детализацией транспортного средства
 * source: truck/requests/truck-item-in.json
 *
 * @property string $truckManufacturer
 * @property string $truckNumber
 * @property string $truckManufacturerTrailer
 * @property string $truckNumberTrailer
 * @property float $truckCarryingCapacity
 * @property float $truckCubicCapacity
 * @property int $truckTypeId
 * @property string[] $phones
 * @property int[] $ptsFileIds
 */
final class TruckItemIn extends AbstractEntity
{
    protected static $types = [
        'truckManufacturer' => ['string'],
        'truckNumber' => ['string'],
        'truckManufacturerTrailer' => ['string'],
        'truckNumberTrailer' => ['string'],
        'truckCarryingCapacity' => ['float'],
        'truckCubicCapacity' => ['float'],
        'truckTypeId' => ['int'],
        'phones' => ['array', 'string'],
        'ptsFileIds' => ['array', 'int'],
    ];

    protected static $nullables = [
        'truckManufacturer' => false,
        'truckNumber' => false,
        'truckManufacturerTrailer' => false,
        'truckNumberTrailer' => false,
        'truckCarryingCapacity' => false,
        'truckCubicCapacity' => false,
        'truckTypeId' => false,
        'phones' => false,
        'ptsFileIds' => false,
    ];
}
