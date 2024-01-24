<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Структура ответа при запросе файла
 * source: file/responses/file-item.json
 *
 * @property FileItemData $data
 */
final class FileItem extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\File\Responses\FileItemData']];
    protected static $nullables = ['data' => false];
}
