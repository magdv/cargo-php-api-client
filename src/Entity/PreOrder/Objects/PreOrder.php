<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PreOrder\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Предзаказ
 * source: pre-order/objects/pre-order.json
 *
 * @property string $serialId
 * @property string $id
 * @property string $departure
 * @property string $destination
 * @property string $consignorId
 * @property string $carrierId
 * @property int $creatorId
 * @property string $loadingDate
 * @property string $price
 * @property int $cargoWeight
 * @property int $cargoCapacity
 * @property int $truckTypeId
 * @property int[] $loading
 * @property float $vatRate
 * @property PreOrderAccess $access
 */
final class PreOrder extends AbstractEntity
{
    protected static $types = [
        'serialId' => ['string'],
        'id' => ['string'],
        'departure' => ['string'],
        'destination' => ['string'],
        'consignorId' => ['string'],
        'carrierId' => ['string'],
        'creatorId' => ['int'],
        'loadingDate' => ['string'],
        'price' => ['string'],
        'cargoWeight' => ['int'],
        'cargoCapacity' => ['int'],
        'truckTypeId' => ['int'],
        'loading' => ['array', 'int'],
        'vatRate' => ['float'],
        'access' => ['Cargomart\ApiClient\Entity\PreOrder\Objects\PreOrderAccess'],
    ];

    protected static $nullables = [
        'serialId' => false,
        'id' => false,
        'departure' => false,
        'destination' => false,
        'consignorId' => false,
        'carrierId' => false,
        'creatorId' => false,
        'loadingDate' => false,
        'price' => false,
        'cargoWeight' => false,
        'cargoCapacity' => false,
        'truckTypeId' => false,
        'loading' => false,
        'vatRate' => false,
        'access' => false,
    ];
}
