<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier;
use Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle;
use Cargomart\ApiClient\Entity\Truck\Objects\Vehicle;

/**
 * Данные транспортного средства в заказе
 * source: order/Common/objects/order-truck.json
 *
 * @property string $manufacturer
 * @property string $number
 * @property string $manufacturerTrailer
 * @property string $numberTrailer
 * @property float $carryingCapacity
 * @property float $cubicCapacity
 * @property int $typeId
 * @property int $modeId
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
 * @property string $ownerCountryCode
 * @property string[] $phones
 * @property string $ownershipTypeTrailer
 * @property string $registrationCountryCodeTrailer
 * @property string $registrationCountryCode
 */
final class OrderTruck extends AbstractEntity
{
    protected static $types = [
        'manufacturer' => ['string'],
        'number' => ['string'],
        'manufacturerTrailer' => ['string'],
        'numberTrailer' => ['string'],
        'carryingCapacity' => ['float'],
        'cubicCapacity' => ['float'],
        'typeId' => ['int'],
        'modeId' => ['int'],
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
        'ownerCountryCode' => ['string'],
        'phones' => ['array', 'string'],
        'ownershipTypeTrailer' => ['string'],
        'registrationCountryCodeTrailer' => ['string'],
        'registrationCountryCode' => ['string'],
    ];

    protected static $nullables = [
        'manufacturer' => false,
        'number' => false,
        'manufacturerTrailer' => false,
        'numberTrailer' => false,
        'carryingCapacity' => false,
        'cubicCapacity' => false,
        'typeId' => false,
        'modeId' => false,
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
        'ownerCountryCode' => false,
        'phones' => false,
        'ownershipTypeTrailer' => false,
        'registrationCountryCodeTrailer' => false,
        'registrationCountryCode' => false,
    ];
}
