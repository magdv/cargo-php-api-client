<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Address;
use Cargomart\ApiClient\Entity\Base\AddressInfo;
use Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule;
use Cargomart\ApiClient\Entity\Edm\Objects\DiadocBoxIdData;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper;

/**
 * Пункт маршрута
 * source: order/objects/route-point-edit.json
 *
 * @property int $id
 * @property int $storagePointId
 * @property AddressInfo $addressInfo
 * @property Address $addressObject
 * @property string $code
 * @property int $serialId
 * @property int $orderId
 * @property string $localityName
 * @property string $title
 * @property string $legalName
 * @property int $legalStatus
 * @property PointShipper $pointShipper
 * @property string $address
 * @property string $house
 * @property string $comment
 * @property string $additionalInfo
 * @property RoutePointContactContact[] $contact
 * @property bool $isLoad
 * @property bool $isEdm
 * @property DiadocBoxIdData $pointShipperDiadocBoxData
 * @property bool $isUnload
 * @property int $weight
 * @property int $capacity
 * @property int $loadingTypeId
 * @property string $cargoType
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
 * @property bool $isAccordingToWorkSchedule
 * @property WorkSchedule $workSchedule
 * @property int $lastUpdate
 * @property string $contactName
 * @property string $contactPhone
 * @property string $contactExt
 * @property float $longitude
 * @property float $latitude
 * @property int $status
 * @property string $storageType
 * @property PointShipper $owner
 * @property OrderPointAccess $access
 */
final class RoutePointEdit extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storagePointId' => ['int'],
        'addressInfo' => ['Cargomart\ApiClient\Entity\Base\AddressInfo'],
        'addressObject' => ['Cargomart\ApiClient\Entity\Base\Address'],
        'code' => ['string'],
        'serialId' => ['int'],
        'orderId' => ['int'],
        'localityName' => ['string'],
        'title' => ['string'],
        'legalName' => ['string'],
        'legalStatus' => ['int'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'address' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'additionalInfo' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointContactContact'],
        'isLoad' => ['bool'],
        'isEdm' => ['bool'],
        'pointShipperDiadocBoxData' => ['Cargomart\ApiClient\Entity\Edm\Objects\DiadocBoxIdData'],
        'isUnload' => ['bool'],
        'weight' => ['int'],
        'capacity' => ['int'],
        'loadingTypeId' => ['int'],
        'cargoType' => ['string'],
        'fromDate' => ['string'],
        'toDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'isAccordingToWorkSchedule' => ['bool'],
        'workSchedule' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkSchedule'],
        'lastUpdate' => ['int'],
        'contactName' => ['string'],
        'contactPhone' => ['string'],
        'contactExt' => ['string'],
        'longitude' => ['float'],
        'latitude' => ['float'],
        'status' => ['int'],
        'storageType' => ['string'],
        'owner' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPointAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'storagePointId' => false,
        'addressInfo' => false,
        'addressObject' => false,
        'code' => false,
        'serialId' => false,
        'orderId' => false,
        'localityName' => false,
        'title' => false,
        'legalName' => false,
        'legalStatus' => false,
        'pointShipper' => false,
        'address' => false,
        'house' => false,
        'comment' => false,
        'additionalInfo' => false,
        'contact' => false,
        'isLoad' => false,
        'isEdm' => false,
        'pointShipperDiadocBoxData' => false,
        'isUnload' => false,
        'weight' => false,
        'capacity' => false,
        'loadingTypeId' => false,
        'cargoType' => false,
        'fromDate' => false,
        'toDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'isAccordingToWorkSchedule' => false,
        'workSchedule' => false,
        'lastUpdate' => false,
        'contactName' => false,
        'contactPhone' => false,
        'contactExt' => false,
        'longitude' => false,
        'latitude' => false,
        'status' => false,
        'storageType' => false,
        'owner' => false,
        'access' => false,
    ];
}
