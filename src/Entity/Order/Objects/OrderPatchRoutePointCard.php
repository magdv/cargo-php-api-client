<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Address;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper;

/**
 * Пункт маршрута
 * source: order/objects/order-patch-route-point-card.json
 *
 * @property int $id
 * @property int $storagePointId
 * @property string $code
 * @property int $serialId
 * @property string $localityName
 * @property string $title
 * @property Address $addressObject
 * @property string $address
 * @property string $house
 * @property string $comment
 * @property string $additionalInfo
 * @property RoutePointContactContact[] $contact
 * @property bool $isLoad
 * @property bool $isEdm
 * @property bool $isUnload
 * @property int $loadingTypeId
 * @property string $cargoType
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property WorkSchedule $workSchedule
 * @property string $contactName
 * @property string $contactPhone
 * @property string $contactExt
 * @property float $longitude
 * @property float $latitude
 * @property int $legalStatus
 * @property string $legalName
 * @property PointShipper $pointShipper
 * @property string $storageType
 * @property PointShipper $owner
 * @property int[] $fileIds
 * @property int $status
 */
final class OrderPatchRoutePointCard extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storagePointId' => ['int'],
        'code' => ['string'],
        'serialId' => ['int'],
        'localityName' => ['string'],
        'title' => ['string'],
        'addressObject' => ['Cargomart\ApiClient\Entity\Base\Address'],
        'address' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'additionalInfo' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointContactContact'],
        'isLoad' => ['bool'],
        'isEdm' => ['bool'],
        'isUnload' => ['bool'],
        'loadingTypeId' => ['int'],
        'cargoType' => ['string'],
        'fromDate' => ['string'],
        'toDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
        'contactName' => ['string'],
        'contactPhone' => ['string'],
        'contactExt' => ['string'],
        'longitude' => ['float'],
        'latitude' => ['float'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'storageType' => ['string'],
        'owner' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'fileIds' => ['array', 'int'],
        'status' => ['int'],
    ];

    protected static $nullables = [
        'id' => false,
        'storagePointId' => false,
        'code' => false,
        'serialId' => false,
        'localityName' => false,
        'title' => false,
        'addressObject' => false,
        'address' => false,
        'house' => false,
        'comment' => false,
        'additionalInfo' => false,
        'contact' => false,
        'isLoad' => false,
        'isEdm' => false,
        'isUnload' => false,
        'loadingTypeId' => false,
        'cargoType' => false,
        'fromDate' => false,
        'toDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
        'workSchedule' => false,
        'contactName' => false,
        'contactPhone' => false,
        'contactExt' => false,
        'longitude' => false,
        'latitude' => false,
        'legalStatus' => false,
        'legalName' => false,
        'pointShipper' => false,
        'storageType' => false,
        'owner' => false,
        'fileIds' => false,
        'status' => false,
    ];
}
