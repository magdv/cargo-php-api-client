<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Manage\PreOrder\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderAdminAccess;

/**
 * Предзаказ
 * source: manage/pre-order/models/pre-order-admin.json
 *
 * @property string $id
 * @property string $serialId
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
 * @property int $orderId
 * @property PreOrderAdminAccess $access
 */
final class PreOrderAdmin extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['string'],
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
        'orderId' => ['int'],
        'access' => ['Cargomart\ApiClient\Entity\Manage\PreOrder\Objects\PreOrderAdminAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'serialId' => false,
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
        'orderId' => false,
        'access' => false,
    ];
}
