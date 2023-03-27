<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/responses/point-one.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV1;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem;

/**
 * Common response data
 * source: storage-point/responses/point-one.json#/properties/data
 *
 * @property PointItem[] $storagePoint
 * @property Locality[] $locality
 * @property ContactItem[] $storagePointContact
 * @property FileV1[] $file
 */
final class PointOneData extends AbstractEntity
{
    protected static $types = [
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileV1'],
    ];

    protected static $nullables = [
        'storagePoint' => false,
        'locality' => false,
        'storagePointContact' => false,
        'file' => false,
    ];
}
