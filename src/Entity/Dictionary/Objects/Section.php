<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Макро-регионы перевозок
 * source: dictionary/objects/section.json
 *
 * @property string $id
 * @property string $name
 * @property string $shortName
 */
final class Section extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string'], 'shortName' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false, 'shortName' => false];
}
