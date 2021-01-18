<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Экспортная информация по компании для заказ
 * source: order/objects/storage-point-export.json
 *
 * @property int $id
 * @property string $code
 * @property string $title
 * @property string $address
 * @property string $localityName
 * @property string $house
 * @property string $comment
 * @property float $latitude
 * @property float $longitude
 */
final class StoragePointExport extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'code' => ['string'],
        'title' => ['string'],
        'address' => ['string'],
        'localityName' => ['string'],
        'house' => ['string'],
        'comment' => ['string'],
        'latitude' => ['float'],
        'longitude' => ['float'],
    ];

    protected static $nullables = [
        'id' => false,
        'code' => false,
        'title' => false,
        'address' => false,
        'localityName' => false,
        'house' => false,
        'comment' => false,
        'latitude' => false,
        'longitude' => false,
    ];
}
