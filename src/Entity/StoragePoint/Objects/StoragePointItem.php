<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/objects/storage-point-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Coordinate;
use Cargomart\ApiClient\Entity\Base\CustomContactItems;

/**
 * Данные склада маршрутного пункта
 * source: storage-point/objects/storage-point-item.json
 *
 * @property int $id
 * @property string $code
 * @property string $title
 * @property string $localityName
 * @property string $address
 * @property \stdClass $addressObject
 * @property string $house
 * @property string $comment
 * @property CustomContactItems[] $contact
 * @property Coordinate $coordinate
 * @property int $legalStatus
 * @property string $legalName
 * @property int $status
 * @property bool $isEdm
 * @property PointShipper $pointShipper
 * @property int[] $fileIds
 */
final class StoragePointItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'code' => ['string'],
        'title' => ['string'],
        'localityName' => ['string'],
        'address' => ['string'],
        'addressObject' => ['\stdClass'],
        'house' => ['string'],
        'comment' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Base\CustomContactItems'],
        'coordinate' => ['Cargomart\ApiClient\Entity\Base\Coordinate'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'status' => ['int'],
        'isEdm' => ['bool'],
        'pointShipper' => ['Cargomart\ApiClient\Entity\StoragePoint\Objects\PointShipper'],
        'fileIds' => ['array', 'int'],
    ];

    protected static $nullables = [
        'id' => false,
        'code' => false,
        'title' => false,
        'localityName' => false,
        'address' => false,
        'addressObject' => true,
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
    ];
}
