<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier;
use Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle;
use Cargomart\ApiClient\Entity\Truck\Objects\Vehicle;

/**
 * Данные транспортного средства в заказе
 * source: expeditor/Common/objects/proposal-truck.json
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
 * @property string $affiliationType
 * @property string $companyOwnerInn
 * @property string $companyOwnerName
 * @property string $companyOwnerAddress
 * @property string[] $phones
 * @property TractorVehicle $tractor
 * @property Vehicle $trailer
 * @property Vehicle $van
 * @property ActualCarrier $actualCarrier
 * @property string $ownerCountryCode
 */
final class ProposalTruck extends AbstractEntity
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
        'affiliationType' => ['string'],
        'companyOwnerInn' => ['string'],
        'companyOwnerName' => ['string'],
        'companyOwnerAddress' => ['string'],
        'phones' => ['array', 'string'],
        'tractor' => ['Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle'],
        'trailer' => ['Cargomart\ApiClient\Entity\Truck\Objects\Vehicle'],
        'van' => ['Cargomart\ApiClient\Entity\Truck\Objects\Vehicle'],
        'actualCarrier' => ['Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier'],
        'ownerCountryCode' => ['string'],
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
        'affiliationType' => false,
        'companyOwnerInn' => false,
        'companyOwnerName' => false,
        'companyOwnerAddress' => false,
        'phones' => false,
        'tractor' => false,
        'trailer' => false,
        'van' => false,
        'actualCarrier' => false,
        'ownerCountryCode' => false,
    ];
}
