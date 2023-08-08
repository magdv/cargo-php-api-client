<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Setting\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Элемент настроек
 * source: setting/objects/setting-group.json
 *
 * @property string $name
 * @property bool $value
 * @property string $title
 * @property string $description
 * @property string $category
 * @property SettingChild[] $child
 */
final class SettingGroup extends AbstractEntity
{
    protected static $types = [
        'name' => ['string'],
        'value' => ['bool'],
        'title' => ['string'],
        'description' => ['string'],
        'category' => ['string'],
        'child' => ['array', 'Cargomart\ApiClient\Entity\Setting\Objects\SettingChild'],
    ];

    protected static $nullables = [
        'name' => false,
        'value' => false,
        'title' => false,
        'description' => false,
        'category' => false,
        'child' => false,
    ];
}
