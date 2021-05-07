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
 * @property string $model
 * @property float $carryingCapacity
 * @property float $cubicCapacity
 * @property int $typeId
 * @property string $ownershipType
 * @property string $affiliationType
 * @property string $companyOwnerInn
 * @property string $companyOwnerName
 * @property string $companyOwnerAddress
 * @property int $modeId
 * @property string[] $phones
 * @property int[] $ptsFileIds
 * @property int $status
 * @property string $rejectionReason
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
        'model' => ['string'],
        'carryingCapacity' => ['float'],
        'cubicCapacity' => ['float'],
        'typeId' => ['int'],
        'ownershipType' => ['string'],
        'affiliationType' => ['string'],
        'companyOwnerInn' => ['string'],
        'companyOwnerName' => ['string'],
        'companyOwnerAddress' => ['string'],
        'modeId' => ['int'],
        'phones' => ['array', 'string'],
        'ptsFileIds' => ['array', 'int'],
        'status' => ['int'],
        'rejectionReason' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Truck\Objects\TruckAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'manufacturer' => false,
        'number' => false,
        'manufacturerTrailer' => false,
        'numberTrailer' => false,
        'model' => false,
        'carryingCapacity' => false,
        'cubicCapacity' => false,
        'typeId' => false,
        'ownershipType' => false,
        'affiliationType' => false,
        'companyOwnerInn' => false,
        'companyOwnerName' => false,
        'companyOwnerAddress' => false,
        'modeId' => false,
        'phones' => false,
        'ptsFileIds' => false,
        'status' => false,
        'rejectionReason' => false,
        'access' => false,
    ];
}
