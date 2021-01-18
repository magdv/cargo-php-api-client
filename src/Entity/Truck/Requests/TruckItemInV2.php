<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * объект с детализацией транспортного средства
 * source: truck/requests/truck-item-in-v2.json
 *
 * @property string $manufacturer
 * @property string $number
 * @property string $manufacturerTrailer
 * @property string $numberTrailer
 * @property float $carryingCapacity
 * @property float $cubicCapacity
 * @property int $typeId
 * @property string $ownershipType
 * @property string[] $phones
 * @property int[] $ptsFileIds
 */
final class TruckItemInV2 extends AbstractEntity
{
    protected static $types = [
        'manufacturer' => ['string'],
        'number' => ['string'],
        'manufacturerTrailer' => ['string'],
        'numberTrailer' => ['string'],
        'carryingCapacity' => ['float'],
        'cubicCapacity' => ['float'],
        'typeId' => ['int'],
        'ownershipType' => ['string'],
        'phones' => ['array', 'string'],
        'ptsFileIds' => ['array', 'int'],
    ];

    protected static $nullables = [
        'manufacturer' => false,
        'number' => false,
        'manufacturerTrailer' => false,
        'numberTrailer' => false,
        'carryingCapacity' => false,
        'cubicCapacity' => false,
        'typeId' => false,
        'ownershipType' => false,
        'phones' => false,
        'ptsFileIds' => false,
    ];
}
