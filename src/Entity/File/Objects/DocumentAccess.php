<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: file/objects/document.json#/properties/access
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\File\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Контекстные права доступа к документу
 * source: file/objects/document.json#/properties/access
 *
 * @property bool $update
 * @property bool $delete
 * @property bool $download
 * @property bool $sharing
 */
final class DocumentAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool'], 'download' => ['bool'], 'sharing' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false, 'download' => false, 'sharing' => false];
}
