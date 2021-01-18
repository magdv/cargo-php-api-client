<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\StoragePoint\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель разрешений склада
 * source: storage-point/objects/point-access.json
 *
 * @property bool $update
 * @property bool $delete
 */
final class PointAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}
