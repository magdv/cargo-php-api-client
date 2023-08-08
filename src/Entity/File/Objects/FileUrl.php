<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект ссылки на скачивание файла
 * source: file/objects/file-url.json
 *
 * @property string $url
 * @property string $fileName
 * @property string $mimeType
 */
final class FileUrl extends AbstractEntity
{
    protected static $types = ['url' => ['string'], 'fileName' => ['string'], 'mimeType' => ['string']];
    protected static $nullables = ['url' => false, 'fileName' => false, 'mimeType' => false];
}
