<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * deprecated объект с детализацией транспортного средства
 * source: truck/objects/truck-old.json
 *
 * @property int $id
 * @property string $truckManufacturer
 * @property string $truckNumber
 * @property string $truckManufacturerTrailer
 * @property string $truckNumberTrailer
 * @property string $truckModel
 * @property float $carryingCapacityValue
 * @property float $cubicCapacityValue
 * @property int $truckTypeId
 * @property int $truckModeId
 * @property \stdClass $photo
 * @property string[] $phones
 * @property \stdClass $pts
 * @property int $status
 * @property string $rejectionReason
 * @property TruckAccess $access
 */
final class TruckOld extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'truckManufacturer' => ['string'],
        'truckNumber' => ['string'],
        'truckManufacturerTrailer' => ['string'],
        'truckNumberTrailer' => ['string'],
        'truckModel' => ['string'],
        'carryingCapacityValue' => ['float'],
        'cubicCapacityValue' => ['float'],
        'truckTypeId' => ['int'],
        'truckModeId' => ['int'],
        'photo' => ['\stdClass'],
        'phones' => ['array', 'string'],
        'pts' => ['\stdClass'],
        'status' => ['int'],
        'rejectionReason' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Truck\Objects\TruckAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'truckManufacturer' => false,
        'truckNumber' => false,
        'truckManufacturerTrailer' => false,
        'truckNumberTrailer' => false,
        'truckModel' => false,
        'carryingCapacityValue' => false,
        'cubicCapacityValue' => false,
        'truckTypeId' => false,
        'truckModeId' => false,
        'photo' => true,
        'phones' => false,
        'pts' => true,
        'status' => false,
        'rejectionReason' => false,
        'access' => false,
    ];
}
