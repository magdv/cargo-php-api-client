<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/objects/simple-document-title.json#/properties/resolution
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Решение, которое реализует титул
 * source: simple-document/objects/simple-document-title.json#/properties/resolution
 *
 * @property string $name
 * @property string $type
 */
final class SimpleDocumentTitleResolution extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'type' => ['string']];
    protected static $nullables = ['name' => false, 'type' => false];
}
