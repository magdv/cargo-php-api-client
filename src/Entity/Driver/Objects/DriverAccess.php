<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Driver\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запись информации о водителе
 * source: driver/objects/driver-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $delete
 * @property bool $createDriverAppInvite
 */
final class DriverAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'delete' => ['bool'],
        'createDriverAppInvite' => ['bool'],
    ];

    protected static $nullables = ['view' => false, 'update' => false, 'delete' => false, 'createDriverAppInvite' => false];
}
