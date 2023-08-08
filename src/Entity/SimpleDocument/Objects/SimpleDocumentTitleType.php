<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект типа титула в документе заказа
 * source: simple-document/objects/simple-document-title-type.json
 *
 * @property string $id
 * @property string $name
 * @property string $type
 */
final class SimpleDocumentTitleType extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string'], 'type' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'type' => false];
}
