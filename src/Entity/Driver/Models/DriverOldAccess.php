<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контекстные права доступа к водителю
 * source: driver/models/driver-old.json#/properties/access
 *
 * @property bool $update
 * @property bool $delete
 */
final class DriverOldAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}
