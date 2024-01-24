<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект файла
 * source: file/objects/file-v1.json
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $extension
 * @property string $mime
 * @property int $size
 * @property string $url
 * @property string $publicUrl
 */
final class FileV1 extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'title' => ['string'],
        'name' => ['string'],
        'extension' => ['string'],
        'mime' => ['string'],
        'size' => ['int'],
        'url' => ['string'],
        'publicUrl' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'title' => false,
        'name' => false,
        'extension' => false,
        'mime' => false,
        'size' => false,
        'url' => false,
        'publicUrl' => false,
    ];
}
