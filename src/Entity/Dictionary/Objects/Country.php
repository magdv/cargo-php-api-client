<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект страны
 * source: dictionary/objects/country.json
 *
 * @property string $code
 * @property string $name
 */
final class Country extends AbstractEntity
{
    protected static $types = ['code' => ['string'], 'name' => ['string']];
    protected static $nullables = ['code' => false, 'name' => false];
}
