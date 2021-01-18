<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пункт маршрута
 * source: order/objects/route-point-edit.json
 *
 * @property int $id
 * @property int $storagePointId
 * @property string $code
 * @property int $serialId
 * @property int $orderId
 * @property string $localityName
 * @property string $title
 * @property string $address
 * @property string $house
 * @property string $comment
 * @property string $additionalInfo
 * @property RoutePointContactContact[] $contact
 * @property \stdClass $storagePoint
 * @property bool $isLoad
 * @property bool $isUnload
 * @property int $weight
 * @property int $capacity
 * @property int $loadingTypeId
 * @property string $cargoType
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromTime
 * @property string $toTime
 * @property int $lastUpdate
 * @property string $contactName
 * @property string $contactPhone
 * @property string $contactExt
 * @property float $longitude
 * @property float $latitude
 * @property OrderPointAccess $access
 */
final class RoutePointEdit extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'storagePointId' => ['int'],
        'code' => ['string'],
        'serialId' => ['int'],
        'orderId' => ['int'],
        'localityName' => ['string'],
        'title' => ['string'],
        'address' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'additionalInfo' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\RoutePointContactContact'],
        'storagePoint' => ['\stdClass'],
        'isLoad' => ['bool'],
        'isUnload' => ['bool'],
        'weight' => ['int'],
        'capacity' => ['int'],
        'loadingTypeId' => ['int'],
        'cargoType' => ['string'],
        'fromDate' => ['string'],
        'toDate' => ['string'],
        'fromTime' => ['string'],
        'toTime' => ['string'],
        'lastUpdate' => ['int'],
        'contactName' => ['string'],
        'contactPhone' => ['string'],
        'contactExt' => ['string'],
        'longitude' => ['float'],
        'latitude' => ['float'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderPointAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'storagePointId' => false,
        'code' => false,
        'serialId' => false,
        'orderId' => false,
        'localityName' => false,
        'title' => false,
        'address' => false,
        'house' => false,
        'comment' => false,
        'additionalInfo' => false,
        'contact' => false,
        'storagePoint' => true,
        'isLoad' => false,
        'isUnload' => false,
        'weight' => false,
        'capacity' => false,
        'loadingTypeId' => false,
        'cargoType' => false,
        'fromDate' => false,
        'toDate' => false,
        'fromTime' => false,
        'toTime' => false,
        'lastUpdate' => false,
        'contactName' => false,
        'contactPhone' => false,
        'contactExt' => false,
        'longitude' => false,
        'latitude' => false,
        'access' => false,
    ];
}
