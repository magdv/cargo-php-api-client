<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/document-file.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Файл привязанный к докменту
 * source: base/document-file.json
 *
 * @property string $title
 * @property string $mime
 * @property string $extension
 * @property int $size
 * @property string $url
 */
final class DocumentFile extends AbstractEntity
{
    protected static $types = [
        'title' => ['string'],
        'mime' => ['string'],
        'extension' => ['string'],
        'size' => ['int'],
        'url' => ['string'],
    ];

    protected static $nullables = [
        'title' => false,
        'mime' => false,
        'extension' => false,
        'size' => false,
        'url' => false,
    ];
}
