<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: file/responses/file-v2-item.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileV2;

/**
 * Информация о файле
 * source: file/responses/file-v2-item.json#/properties/data
 *
 * @property FileV2 $file
 */
final class FileV2ItemData extends AbstractEntity
{
    protected static $types = ['file' => ['Cargomart\ApiClient\Entity\File\Objects\FileV2']];
    protected static $nullables = ['file' => false];
}
