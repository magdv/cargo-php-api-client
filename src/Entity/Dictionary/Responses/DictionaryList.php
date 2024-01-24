<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Словари
 * source: dictionary/responses/dictionary-list.json
 *
 * @property DictionaryListData $data
 */
final class DictionaryList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\DictionaryListData']];
    protected static $nullables = ['data' => false];
}
