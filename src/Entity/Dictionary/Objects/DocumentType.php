<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Типы документов
 * source: dictionary/objects/document-type.json
 *
 * @property int $id
 * @property string $name
 * @property string $description
 */
final class DocumentType extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string'], 'description' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'description' => false];
}
