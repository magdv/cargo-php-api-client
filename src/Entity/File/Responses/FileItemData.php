<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV1;

/**
 * Информация о файле
 * source: file/responses/file-item.json#/properties/data
 *
 * @property FileV1 $file
 */
final class FileItemData extends AbstractEntity
{
    protected static $types = ['file' => ['Cargomart\ApiClient\Entity\File\Objects\FileV1']];
    protected static $nullables = ['file' => false];
}
