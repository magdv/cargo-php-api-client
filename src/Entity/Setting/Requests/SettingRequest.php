<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Setting\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект запроса на изменение настройки
 * source: setting/requests/setting-request.json
 *
 * @property bool $value
 */
final class SettingRequest extends AbstractEntity
{
    protected static $types = ['value' => ['bool']];
    protected static $nullables = ['value' => false];
}
