<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/settings.json#/properties/access
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект доступа к настройкам
 * source: company/objects/settings.json#/properties/access
 *
 * @property bool $update
 */
final class SettingsAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool']];
    protected static $nullables = ['update' => false];
}
