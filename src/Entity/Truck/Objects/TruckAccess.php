<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к ТС
 * source: truck/objects/truck-access.json
 *
 * @property bool $update
 * @property bool $delete
 */
final class TruckAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}
