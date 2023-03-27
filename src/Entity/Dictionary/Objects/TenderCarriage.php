<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/tender-carriage.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект элемента списка типа объемов перевозки по тендеру
 * source: dictionary/objects/tender-carriage.json
 *
 * @property string $id
 * @property string $name
 */
final class TenderCarriage extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
