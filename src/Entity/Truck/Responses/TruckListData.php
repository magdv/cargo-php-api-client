<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\File\Objects\File;

/**
 * Список машин
 * source: truck/responses/truck-list.json#/properties/data
 *
 * @property \stdClass[] $truck
 * @property Pagination $pagination
 * @property TruckType[] $truckType
 * @property TruckMode[] $truckMode
 * @property File[] $file
 */
final class TruckListData extends AbstractEntity
{
    protected static $types = [
        'truck' => ['array', '\stdClass'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\File'],
    ];

    protected static $nullables = [
        'truck' => false,
        'pagination' => false,
        'truckType' => false,
        'truckMode' => false,
        'file' => false,
    ];
}
