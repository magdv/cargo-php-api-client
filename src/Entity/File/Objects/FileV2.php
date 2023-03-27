<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: file/objects/file-v2.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект файла
 * source: file/objects/file-v2.json
 *
 * @property string $id
 * @property string $title
 * @property string $extension
 * @property string $mime
 * @property int $size
 * @property string $url
 */
final class FileV2 extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'title' => ['string'],
        'extension' => ['string'],
        'mime' => ['string'],
        'size' => ['int'],
        'url' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'extension' => false,
        'mime' => false,
        'size' => false,
        'url' => false,
    ];
}
