<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Rate;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Структура ответа при запросе списка котировок
 * source: rate/rate-list.json
 *
 * @property MessageV2[] $message
 * @property RateListData $data
 */
final class RateList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Rate\RateListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
