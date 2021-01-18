<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные транспортного средства в заказе
 * source: order/objects/order-truck.json
 *
 * @property int $modeId
 * @property string $manufacturer
 * @property string $number
 * @property string $manufacturerTrailer
 * @property string $numberTrailer
 * @property float $carryingCapacity
 * @property float $cubicCapacity
 * @property int $typeId
 * @property string $ownershipType
 * @property string[] $phones
 */
final class OrderTruck extends AbstractEntity
{
    protected static $types = [
        'modeId' => ['int'],
        'manufacturer' => ['string'],
        'number' => ['string'],
        'manufacturerTrailer' => ['string'],
        'numberTrailer' => ['string'],
        'carryingCapacity' => ['float'],
        'cubicCapacity' => ['float'],
        'typeId' => ['int'],
        'ownershipType' => ['string'],
        'phones' => ['array', 'string'],
    ];

    protected static $nullables = [
        'modeId' => false,
        'manufacturer' => false,
        'number' => false,
        'manufacturerTrailer' => false,
        'numberTrailer' => false,
        'carryingCapacity' => false,
        'cubicCapacity' => false,
        'typeId' => false,
        'ownershipType' => false,
        'phones' => false,
    ];
}
