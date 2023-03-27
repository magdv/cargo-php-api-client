<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/responses/branch-list.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Структура ответа при запросе списка филиалов
 * source: dictionary/responses/branch-list.json
 *
 * @property MessageV2[] $message
 * @property BranchListData $data
 */
final class BranchList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\BranchListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
