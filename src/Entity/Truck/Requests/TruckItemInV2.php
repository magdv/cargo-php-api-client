<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier;
use Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle;
use Cargomart\ApiClient\Entity\Truck\Objects\Vehicle;

/**
 * объект с детализацией транспортного средства
 * source: truck/requests/truck-item-in-v2.json
 *
 * @property int $modeId
 * @property TractorVehicle $tractor
 * @property Vehicle $trailer
 * @property Vehicle $van
 * @property int $validationStatus
 * @property string $affiliationType
 * @property ActualCarrier $actualCarrier
 * @property string[] $phones
 * @property int[] $ptsFileIds
 * @property bool $isTrackingAllowed
 * @property string $ownerCountryCode
 */
final class TruckItemInV2 extends AbstractEntity
{
    protected static $types = [
        'modeId' => ['int'],
        'tractor' => ['Cargomart\ApiClient\Entity\Truck\Objects\TractorVehicle'],
        'trailer' => ['Cargomart\ApiClient\Entity\Truck\Objects\Vehicle'],
        'van' => ['Cargomart\ApiClient\Entity\Truck\Objects\Vehicle'],
        'validationStatus' => ['int'],
        'affiliationType' => ['string'],
        'actualCarrier' => ['Cargomart\ApiClient\Entity\Truck\Objects\ActualCarrier'],
        'phones' => ['array', 'string'],
        'ptsFileIds' => ['array', 'int'],
        'isTrackingAllowed' => ['bool'],
        'ownerCountryCode' => ['string'],
    ];

    protected static $nullables = [
        'modeId' => false,
        'tractor' => false,
        'trailer' => false,
        'van' => false,
        'validationStatus' => false,
        'affiliationType' => false,
        'actualCarrier' => false,
        'phones' => false,
        'ptsFileIds' => false,
        'isTrackingAllowed' => false,
        'ownerCountryCode' => false,
    ];
}
