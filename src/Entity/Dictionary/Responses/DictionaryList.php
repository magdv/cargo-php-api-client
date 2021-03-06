<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Словари
 * source: dictionary/responses/dictionary-list.json
 *
 * @property MessageV2[] $message
 * @property DictionaryListData $data
 */
final class DictionaryList extends AbstractEntity
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\DictionaryListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
