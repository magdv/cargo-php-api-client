<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/responses/point-list.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\File\Objects\FileV1;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem;

/**
 * source: storage-point/responses/point-list.json#/properties/data
 *
 * @property PointItem[] $storagePoint
 * @property Locality[] $locality
 * @property ContactItem[] $storagePointContact
 * @property FileV1[] $file
 * @property Pagination $pagination
 */
final class PointListData extends AbstractEntity
{
    protected static $types = [
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileV1'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = [
        'storagePoint' => false,
        'locality' => false,
        'storagePointContact' => false,
        'file' => false,
        'pagination' => false,
    ];
}
