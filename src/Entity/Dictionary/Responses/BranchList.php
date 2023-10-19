<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Структура ответа при запросе списка филиалов
 * source: dictionary/responses/branch-list.json
 *
 * @property BranchListData $data
 */
final class BranchList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\BranchListData']];
    protected static $nullables = ['data' => false];
}
