<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Address;
use Cargomart\ApiClient\Entity\Base\Coordinate;
use Cargomart\ApiClient\Entity\Base\CustomContactContact;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;

/**
 * Данные склада маршрутного пункта
 * source: storage-point/objects/storage-point-item.json
 *
 * @property int $id
 * @property string $code
 * @property string $title
 * @property string $localityName
 * @property string $address
 * @property Address $addressObject
 * @property WorkSchedule $workSchedule
 * @property string $house
 * @property string $comment
 * @property CustomContactContact[] $contact
 * @property Coordinate $coordinate
 * @property int $legalStatus
 * @property string $legalName
 * @property int $status
 * @property bool $isEdm
 * @property PointShipper $pointShipper
 * @property int[] $fileIds
 * @property string $contractNumber
 * @property string $contractDate
 * @property string $storageType
 * @property bool $isOwnerPointShipper
 * @property PointShipper $owner
 */
final class StoragePointItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'code' => ['string'],
        'title' => ['string'],
        'localityName' => ['string'],
        'address' => ['string'],
        'addressObject' => ['Cargomart\ApiClient\Entity\Base\Address'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
        'house' => ['string'],
        'comment' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Base\CustomContactContact'],
        'coordinate' => ['Cargomart\ApiClient\Entity\Base\Coordinate'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'status' => ['int'],
        'isEdm' => ['bool'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'fileIds' => ['array', 'int'],
        'contractNumber' => ['string'],
        'contractDate' => ['string'],
        'storageType' => ['string'],
        'isOwnerPointShipper' => ['bool'],
        'owner' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
    ];

    protected static $nullables = [
        'id' => false,
        'code' => false,
        'title' => false,
        'localityName' => false,
        'address' => false,
        'addressObject' => false,
        'workSchedule' => false,
        'house' => false,
        'comment' => false,
        'contact' => false,
        'coordinate' => false,
        'legalStatus' => false,
        'legalName' => false,
        'status' => false,
        'isEdm' => false,
        'pointShipper' => false,
        'fileIds' => false,
        'contractNumber' => false,
        'contractDate' => false,
        'storageType' => false,
        'isOwnerPointShipper' => false,
        'owner' => false,
    ];
}
