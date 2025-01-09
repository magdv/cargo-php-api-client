<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorTask\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к задачам экспедитора
 * source: expeditor-task/objects/expeditor-task-access.json
 *
 * @property bool $selfAssign
 * @property bool $unassign
 * @property bool $freeze
 * @property bool $resolution
 */
final class ExpeditorTaskAccess extends AbstractEntity
{
    protected static $types = [
        'selfAssign' => ['bool'],
        'unassign' => ['bool'],
        'freeze' => ['bool'],
        'resolution' => ['bool'],
    ];

    protected static $nullables = ['selfAssign' => false, 'unassign' => false, 'freeze' => false, 'resolution' => false];
}
