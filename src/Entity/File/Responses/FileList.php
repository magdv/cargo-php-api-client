<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Структура ответа при запросе списка файлов
 * source: file/responses/file-list.json
 *
 * @property MessageV2[] $message
 * @property FileListData $data
 */
final class FileList extends AbstractEntity
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\File\Responses\FileListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
