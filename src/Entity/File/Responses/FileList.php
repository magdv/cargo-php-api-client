<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Структура ответа при запросе списка файлов
 * source: file/responses/file-list.json
 *
 * @property FileListData $data
 */
final class FileList extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\File\Responses\FileListData']];
    protected static $nullables = ['data' => false];
}
