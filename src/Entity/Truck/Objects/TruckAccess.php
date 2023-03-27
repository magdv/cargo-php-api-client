<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: truck/objects/truck-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Truck\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к ТС
 * source: truck/objects/truck-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $delete
 * @property bool $createActivation
 * @property bool $deleteActivation
 */
final class TruckAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'delete' => ['bool'],
        'createActivation' => ['bool'],
        'deleteActivation' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'delete' => false,
        'createActivation' => false,
        'deleteActivation' => false,
    ];
}
