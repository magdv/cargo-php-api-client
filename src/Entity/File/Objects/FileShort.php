<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект файла(краткая версия)
 * source: file/objects/file-short.json
 *
 * @property string $id
 */
final class FileShort extends AbstractEntity
{
    protected static $types = ['id' => ['string']];
    protected static $nullables = ['id' => false];
}
