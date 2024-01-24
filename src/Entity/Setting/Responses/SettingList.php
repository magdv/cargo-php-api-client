<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Setting\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Структура ответа при запросе списка настроек пользователя
 * source: setting/responses/setting-list.json
 *
 * @property SettingListData $data
 */
final class SettingList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Setting\Responses\SettingListData']];
    protected static $nullables = ['data' => false];
}
