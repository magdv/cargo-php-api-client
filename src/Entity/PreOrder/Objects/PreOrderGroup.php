<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сгруппированный предзаказ
 * source: pre-order/objects/pre-order-group.json
 *
 * @property string $id
 * @property string $departure
 * @property string $destination
 * @property string $consignorId
 * @property string $loadingDate
 * @property string $price
 * @property int $cargoWeight
 * @property int $cargoCapacity
 * @property int $truckTypeId
 * @property int[] $loading
 * @property float $vatRate
 * @property string $countAvailable
 * @property float $countTaken
 * @property PreOrderGroupAccess $access
 * @property int[] $acceptRestrictions
 */
final class PreOrderGroup extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'departure' => ['string'],
        'destination' => ['string'],
        'consignorId' => ['string'],
        'loadingDate' => ['string'],
        'price' => ['string'],
        'cargoWeight' => ['int'],
        'cargoCapacity' => ['int'],
        'truckTypeId' => ['int'],
        'loading' => ['array', 'int'],
        'vatRate' => ['float'],
        'countAvailable' => ['string'],
        'countTaken' => ['float'],
        'access' => ['Cargomart\ApiClient\Entity\PreOrder\Objects\PreOrderGroupAccess'],
        'acceptRestrictions' => ['array', 'int'],
    ];

    protected static $nullables = [
        'id' => false,
        'departure' => false,
        'destination' => false,
        'consignorId' => false,
        'loadingDate' => false,
        'price' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'truckTypeId' => false,
        'loading' => false,
        'vatRate' => false,
        'countAvailable' => false,
        'countTaken' => false,
        'access' => false,
        'acceptRestrictions' => false,
    ];
}
