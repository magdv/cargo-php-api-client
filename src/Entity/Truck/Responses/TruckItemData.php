<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode;
use Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType;
use Cargomart\ApiClient\Entity\File\Objects\File;

/**
 * ТС
 * source: truck/responses/truck-item.json#/properties/data
 *
 * @property \stdClass $truck
 * @property TruckType[] $truckType
 * @property TruckMode[] $truckMode
 * @property File[] $file
 */
final class TruckItemData extends AbstractEntity
{
    protected static $types = [
        'truck' => ['\stdClass'],
        'truckType' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckType'],
        'truckMode' => ['array', 'Cargomart\ApiClient\Entity\Dictionary\Objects\TruckMode'],
        'file' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\File'],
    ];

    protected static $nullables = ['truck' => true, 'truckType' => false, 'truckMode' => false, 'file' => false];
}
