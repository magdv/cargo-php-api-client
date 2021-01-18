<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * категории водительских прав водителя
 * source: driver/models/driver-old.json#/properties/driverLicense
 *
 * @property int $id
 * @property string $name
 */
final class DriverOldDriverLicense extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
