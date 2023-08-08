<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Setting\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Структура ответа при запросе списка настроек пользователя
 * source: setting/responses/setting-list.json
 *
 * @property MessageV2[] $message
 * @property SettingListData $data
 */
final class SettingList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Setting\Responses\SettingListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
