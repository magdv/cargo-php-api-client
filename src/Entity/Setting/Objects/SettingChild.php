<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: setting/objects/setting-child.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Setting\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Элемент настроек
 * source: setting/objects/setting-child.json
 *
 * @property string $name
 * @property bool $value
 * @property string $title
 * @property string $category
 */
final class SettingChild extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'value' => ['bool'], 'title' => ['string'], 'category' => ['string']];
    protected static $nullables = ['name' => false, 'value' => false, 'title' => false, 'category' => false];
}
