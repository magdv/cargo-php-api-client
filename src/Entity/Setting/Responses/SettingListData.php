<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: setting/responses/setting-list.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Setting\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Setting\Objects\SettingGroup;

/**
 * Список настроек
 * source: setting/responses/setting-list.json#/properties/data
 *
 * @property SettingGroup[] $setting
 */
final class SettingListData extends AbstractEntity
{
    protected static $types = ['setting' => ['array', 'Cargomart\ApiClient\Entity\Setting\Objects\SettingGroup']];
    protected static $nullables = ['setting' => false];
}
