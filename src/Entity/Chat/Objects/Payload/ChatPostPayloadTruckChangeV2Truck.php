<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier;
use Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle;
use Cargomart\ApiClient\Entity\Truck\Objects\Vehicle;

/**
 * source: chat/objects/payload/chat-post-payload-truck-change-v2.json#/properties/truck
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
 * @property string[] $phones
 * @property int[] $truckIds
 */
final class ChatPostPayloadTruckChangeV2Truck extends AbstractEntity
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
        'phones' => ['array', 'string'],
        'truckIds' => ['array', 'int'],
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
        'phones' => false,
        'truckIds' => false,
    ];
}
