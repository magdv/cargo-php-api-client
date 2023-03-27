<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: dictionary/objects/loading-type.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект элемента списка типов Погрузки
 * source: dictionary/objects/loading-type.json
 *
 * @property int $id
 * @property string $name
 */
final class LoadingType extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
