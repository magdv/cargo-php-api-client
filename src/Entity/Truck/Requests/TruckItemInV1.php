<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * объект с детализацией транспортного средства
 * source: truck/requests/truck-item-in-v1.json
 *
 * @property string $truckManufacturer
 * @property string $truckNumber
 * @property string $truckManufacturerTrailer
 * @property string $truckNumberTrailer
 * @property float $truckCarryingCapacity
 * @property float $truckCubicCapacity
 * @property int $truckTypeId
 * @property int $modeId
 * @property string $ownershipType
 * @property string $ownershipTypeDocumentName
 * @property string $ownershipTypeDocumentNumber
 * @property string $ownershipTypeDocumentDate
 * @property int $validationStatus
 * @property string $affiliationType
 * @property string $companyOwnerCountryCode
 * @property string $companyOwnerInn
 * @property string $companyOwnerName
 * @property string $companyOwnerAddress
 * @property string[] $phones
 * @property int[] $ptsFileIds
 * @property bool $isTrackingAllowed
 */
final class TruckItemInV1 extends AbstractEntity
{
    protected static $types = [
        'truckManufacturer' => ['string'],
        'truckNumber' => ['string'],
        'truckManufacturerTrailer' => ['string'],
        'truckNumberTrailer' => ['string'],
        'truckCarryingCapacity' => ['float'],
        'truckCubicCapacity' => ['float'],
        'truckTypeId' => ['int'],
        'modeId' => ['int'],
        'ownershipType' => ['string'],
        'ownershipTypeDocumentName' => ['string'],
        'ownershipTypeDocumentNumber' => ['string'],
        'ownershipTypeDocumentDate' => ['string'],
        'validationStatus' => ['int'],
        'affiliationType' => ['string'],
        'companyOwnerCountryCode' => ['string'],
        'companyOwnerInn' => ['string'],
        'companyOwnerName' => ['string'],
        'companyOwnerAddress' => ['string'],
        'phones' => ['array', 'string'],
        'ptsFileIds' => ['array', 'int'],
        'isTrackingAllowed' => ['bool'],
    ];

    protected static $nullables = [
        'truckManufacturer' => false,
        'truckNumber' => false,
        'truckManufacturerTrailer' => false,
        'truckNumberTrailer' => false,
        'truckCarryingCapacity' => false,
        'truckCubicCapacity' => false,
        'truckTypeId' => false,
        'modeId' => false,
        'ownershipType' => false,
        'ownershipTypeDocumentName' => false,
        'ownershipTypeDocumentNumber' => false,
        'ownershipTypeDocumentDate' => false,
        'validationStatus' => false,
        'affiliationType' => false,
        'companyOwnerCountryCode' => false,
        'companyOwnerInn' => false,
        'companyOwnerName' => false,
        'companyOwnerAddress' => false,
        'phones' => false,
        'ptsFileIds' => false,
        'isTrackingAllowed' => false,
    ];
}
