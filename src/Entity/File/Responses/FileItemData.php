<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\File;

/**
 * Информация о файле
 * source: file/responses/file-item.json#/properties/data
 *
 * @property File $file
 */
final class FileItemData extends AbstractEntity
{
    protected static $types = ['file' => ['Cargomart\ApiClient\Entity\File\Objects\File']];
    protected static $nullables = ['file' => false];
}
