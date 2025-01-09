<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * объект с детализацией транспортного средства
 * source: truck/objects/truck-one-v1.json
 *
 * @property int $id
 * @property string $truckManufacturer
 * @property string $truckNumber
 * @property string $truckManufacturerTrailer
 * @property string $truckNumberTrailer
 * @property string $truckModel
 * @property float $truckCarryingCapacity
 * @property float $truckCubicCapacity
 * @property int $truckTypeId
 * @property string $ownershipType
 * @property string $ownershipTypeDocumentName
 * @property string $ownershipTypeDocumentNumber
 * @property string $ownershipTypeDocumentDate
 * @property int $validationStatus
 * @property string $affiliationType
 * @property string $companyOwnerInn
 * @property string $companyOwnerName
 * @property string $companyOwnerAddress
 * @property string $companyOwnerCountryCode
 * @property string $ownerCountryCode
 * @property string $holderInn
 * @property int $truckModeId
 * @property string[] $phones
 * @property int[] $ptsFileIds
 * @property int $status
 * @property string $rejectionReason
 * @property bool $isTrackingAllowed
 * @property bool $hasTrackingFilter
 * @property TruckAccess $access
 */
final class TruckOneV1 extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'truckManufacturer' => ['string'],
        'truckNumber' => ['string'],
        'truckManufacturerTrailer' => ['string'],
        'truckNumberTrailer' => ['string'],
        'truckModel' => ['string'],
        'truckCarryingCapacity' => ['float'],
        'truckCubicCapacity' => ['float'],
        'truckTypeId' => ['int'],
        'ownershipType' => ['string'],
        'ownershipTypeDocumentName' => ['string'],
        'ownershipTypeDocumentNumber' => ['string'],
        'ownershipTypeDocumentDate' => ['string'],
        'validationStatus' => ['int'],
        'affiliationType' => ['string'],
        'companyOwnerInn' => ['string'],
        'companyOwnerName' => ['string'],
        'companyOwnerAddress' => ['string'],
        'companyOwnerCountryCode' => ['string'],
        'ownerCountryCode' => ['string'],
        'holderInn' => ['string'],
        'truckModeId' => ['int'],
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
        'truckManufacturer' => false,
        'truckNumber' => false,
        'truckManufacturerTrailer' => false,
        'truckNumberTrailer' => false,
        'truckModel' => false,
        'truckCarryingCapacity' => false,
        'truckCubicCapacity' => false,
        'truckTypeId' => false,
        'ownershipType' => false,
        'ownershipTypeDocumentName' => false,
        'ownershipTypeDocumentNumber' => false,
        'ownershipTypeDocumentDate' => false,
        'validationStatus' => false,
        'affiliationType' => false,
        'companyOwnerInn' => false,
        'companyOwnerName' => false,
        'companyOwnerAddress' => false,
        'companyOwnerCountryCode' => false,
        'ownerCountryCode' => false,
        'holderInn' => false,
        'truckModeId' => false,
        'phones' => false,
        'ptsFileIds' => false,
        'status' => false,
        'rejectionReason' => false,
        'isTrackingAllowed' => false,
        'hasTrackingFilter' => false,
        'access' => false,
    ];
}
