<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: storage-point/responses/storage-point-list.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\File\Objects\FileV1;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem;

/**
 * source: storage-point/responses/storage-point-list.json#/properties/data
 *
 * @property StoragePointItem[] $storagePoint
 * @property Locality[] $locality
 * @property FileV1[] $file
 * @property Pagination $pagination
 */
final class StoragePointListData extends AbstractEntity
{
    protected static $types = [
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\StoragePointItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\FileV1'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['storagePoint' => false, 'locality' => false, 'file' => false, 'pagination' => false];
}
