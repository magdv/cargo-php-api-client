<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Coordinate;
use Cargomart\ApiClient\Entity\Base\CustomContactContact;

/**
 * Данные склада маршрутного пункта
 * source: storage-point/objects/storage-point-item.json
 *
 * @property int $id
 * @property string $code
 * @property string $title
 * @property string $localityName
 * @property string $address
 * @property string $house
 * @property string $comment
 * @property CustomContactContact[] $contact
 * @property Coordinate $coordinate
 * @property int $legalStatus
 * @property string $legalName
 * @property int $status
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
        'house' => ['string'],
        'comment' => ['string'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Base\CustomContactContact'],
        'coordinate' => ['Cargomart\ApiClient\Entity\Base\Coordinate'],
        'legalStatus' => ['int'],
        'legalName' => ['string'],
        'status' => ['int'],
        'fileIds' => ['array', 'int'],
    ];

    protected static $nullables = [
        'id' => false,
        'code' => false,
        'title' => false,
        'localityName' => false,
        'address' => false,
        'house' => false,
        'comment' => false,
        'contact' => false,
        'coordinate' => false,
        'legalStatus' => false,
        'legalName' => false,
        'status' => false,
        'fileIds' => false,
    ];
}
