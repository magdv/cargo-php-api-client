<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Address;
use Cargomart\ApiClient\Entity\Base\AddressInfo;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper;

/**
 * Экспортная информация по компании для заказ
 * source: order/objects/storage-point-export.json
 *
 * @property int $id
 * @property AddressInfo $addressInfo
 * @property Address $addressObject
 * @property string $code
 * @property string $title
 * @property string $address
 * @property string $localityName
 * @property int $legalStatus
 * @property string $legalName
 * @property bool $isEdm
 * @property PointShipper $pointShipper
 * @property string $house
 * @property string $comment
 * @property float $latitude
 * @property float $longitude
 * @property string $storageType
 * @property PointShipper $owner
 */
final class StoragePointExport extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'addressInfo' => ['Cargomart\ApiClient\Entity\Base\AddressInfo'],
        'addressObject' => ['Cargomart\ApiClient\Entity\Base\Address'],
        'code' => ['string'],
        'title' => ['string'],
        'address' => ['string'],
        'localityName' => ['string'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'isEdm' => ['bool'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'house' => ['string'],
        'comment' => ['string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
        'storageType' => ['string'],
        'owner' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
    ];

    protected static $nullables = [
        'id' => false,
        'addressInfo' => false,
        'addressObject' => false,
        'code' => false,
        'title' => false,
        'address' => false,
        'localityName' => false,
        'legalStatus' => false,
        'legalName' => false,
        'isEdm' => false,
        'pointShipper' => false,
        'house' => false,
        'comment' => false,
        'latitude' => false,
        'longitude' => false,
        'storageType' => false,
        'owner' => false,
    ];
}
