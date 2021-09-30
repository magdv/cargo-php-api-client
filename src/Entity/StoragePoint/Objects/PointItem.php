<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
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
 * @property string $localityName
 * @property string $house
 * @property string $comment
 * @property float $latitude
 * @property float $longitude
 * @property int[] $fileIds
 * @property int $legalStatus
 * @property string $legalName
 * @property string $externalId
 * @property int $status
 * @property PointEmailContact[] $emailList
 * @property PointAccess $access
 */
final class PointItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'code' => ['string'],
        'address' => ['string'],
        'localityName' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
        'fileIds' => ['array', 'int'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'externalId' => ['string'],
        'status' => ['int'],
        'emailList' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointEmailContact'],
        'access' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'code' => false,
        'address' => false,
        'localityName' => false,
        'house' => false,
        'comment' => false,
        'latitude' => false,
        'longitude' => false,
        'fileIds' => false,
        'legalStatus' => false,
        'legalName' => false,
        'externalId' => false,
        'status' => false,
        'emailList' => false,
        'access' => false,
    ];
}
