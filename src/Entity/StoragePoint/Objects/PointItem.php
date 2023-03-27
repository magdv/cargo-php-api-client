<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/objects/point-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель склада
 * source: storage-point/objects/point-item.json
 *
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $address
 * @property \stdClass $addressObject
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
 * @property PointAccess $access
 */
final class PointItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'code' => ['string'],
        'address' => ['string'],
        'addressObject' => ['\stdClass'],
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
        'access' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'code' => false,
        'address' => false,
        'addressObject' => true,
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
        'access' => false,
    ];
}
