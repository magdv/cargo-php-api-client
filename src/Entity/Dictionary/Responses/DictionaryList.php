<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/responses/dictionary-list.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Словари
 * source: dictionary/responses/dictionary-list.json
 *
 * @property MessageV2[] $message
 * @property DictionaryListData $data
 */
final class DictionaryList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Dictionary\Responses\DictionaryListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
