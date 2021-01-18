<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект доступов
 * source: company/objects/carriage-region.json#/properties/access
 *
 * @property bool $update
 */
final class CarriageRegionAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool']];
    protected static $nullables = ['update' => false];
}
