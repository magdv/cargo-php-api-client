<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Address;
use Cargomart\ApiClient\Entity\Base\AddressInfo;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;

/**
 * Модель склада
 * source: storage-point/objects/point-item.json
 *
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $address
 * @property AddressInfo $addressInfo
 * @property Address $addressObject
 * @property WorkSchedule $workSchedule
 * @property string $localityName
 * @property string $house
 * @property string $comment
 * @property float $latitude
 * @property float $longitude
 * @property int[] $fileIds
 * @property string $externalId
 * @property int $status
 * @property PointEmailContact[] $emailList
 * @property bool $isEdm
 * @property int $legalStatus
 * @property string $legalName
 * @property PointShipper $pointShipper
 * @property ContactItem[] $contact
 * @property string $contractNumber
 * @property string $contractDate
 * @property string $storageType
 * @property bool $isOwnerPointShipper
 * @property PointShipper $owner
 * @property PointAccess $access
 */
final class PointItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'code' => ['string'],
        'address' => ['string'],
        'addressInfo' => ['Cargomart\ApiClient\Entity\Base\AddressInfo'],
        'addressObject' => ['Cargomart\ApiClient\Entity\Base\Address'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
        'localityName' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
        'fileIds' => ['array', 'int'],
        'externalId' => ['string'],
        'status' => ['int'],
        'emailList' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact'],
        'isEdm' => ['bool'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'contractNumber' => ['string'],
        'contractDate' => ['string'],
        'storageType' => ['string'],
        'isOwnerPointShipper' => ['bool'],
        'owner' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'access' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'code' => false,
        'address' => false,
        'addressInfo' => false,
        'addressObject' => false,
        'workSchedule' => false,
        'localityName' => false,
        'house' => false,
        'comment' => false,
        'latitude' => false,
        'longitude' => false,
        'fileIds' => false,
        'externalId' => false,
        'status' => false,
        'emailList' => false,
        'isEdm' => false,
        'legalStatus' => false,
        'legalName' => false,
        'pointShipper' => false,
        'contact' => false,
        'contractNumber' => false,
        'contractDate' => false,
        'storageType' => false,
        'isOwnerPointShipper' => false,
        'owner' => false,
        'access' => false,
    ];
}
