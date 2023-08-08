<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * объект с детализацией транспортного средства
 * source: truck/objects/truck-one-v2.json
 *
 * @property int $id
 * @property string $manufacturer
 * @property string $number
 * @property string $manufacturerTrailer
 * @property string $numberTrailer
 * @property float $carryingCapacity
 * @property float $cubicCapacity
 * @property int $typeId
 * @property string $model
 * @property string $ownershipType
 * @property TractorVehicle $tractor
 * @property Vehicle $trailer
 * @property Vehicle $van
 * @property int $validationStatus
 * @property string $affiliationType
 * @property string $companyOwnerInn
 * @property string $companyOwnerName
 * @property string $companyOwnerAddress
 * @property ActualCarrier $actualCarrier
 * @property string $companyOwnerCountryCode
 * @property int $modeId
 * @property string $truckModel
 * @property string[] $phones
 * @property int[] $ptsFileIds
 * @property int $status
 * @property string $rejectionReason
 * @property bool $isTrackingAllowed
 * @property bool $hasTrackingFilter
 * @property TruckAccess $access
 */
final class TruckOneV2 extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'manufacturer' => ['string'],
        'number' => ['string'],
        'manufacturerTrailer' => ['string'],
        'numberTrailer' => ['string'],
        'carryingCapacity' => ['float'],
        'cubicCapacity' => ['float'],
        'typeId' => ['int'],
        'model' => ['string'],
        'ownershipType' => ['string'],
        'tractor' => ['Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle'],
        'trailer' => ['Cargomart\ApiClient\Entity\Truck\Objects\Vehicle'],
        'van' => ['Cargomart\ApiClient\Entity\Truck\Objects\Vehicle'],
        'validationStatus' => ['int'],
        'affiliationType' => ['string'],
        'companyOwnerInn' => ['string'],
        'companyOwnerName' => ['string'],
        'companyOwnerAddress' => ['string'],
        'actualCarrier' => ['Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier'],
        'companyOwnerCountryCode' => ['string'],
        'modeId' => ['int'],
        'truckModel' => ['string'],
        'phones' => ['array', 'string'],
        'ptsFileIds' => ['array', 'int'],
        'status' => ['int'],
        'rejectionReason' => ['string'],
        'isTrackingAllowed' => ['bool'],
        'hasTrackingFilter' => ['bool'],
        'access' => ['Cargomart\ApiClient\Entity\Truck\Objects\TruckAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'manufacturer' => false,
        'number' => false,
        'manufacturerTrailer' => false,
        'numberTrailer' => false,
        'carryingCapacity' => false,
        'cubicCapacity' => false,
        'typeId' => false,
        'model' => false,
        'ownershipType' => false,
        'tractor' => false,
        'trailer' => false,
        'van' => false,
        'validationStatus' => false,
        'affiliationType' => false,
        'companyOwnerInn' => false,
        'companyOwnerName' => false,
        'companyOwnerAddress' => false,
        'actualCarrier' => false,
        'companyOwnerCountryCode' => false,
        'modeId' => false,
        'truckModel' => false,
        'phones' => false,
        'ptsFileIds' => false,
        'status' => false,
        'rejectionReason' => false,
        'isTrackingAllowed' => false,
        'hasTrackingFilter' => false,
        'access' => false,
    ];
}
