<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект страны
 * source: dictionary/objects/country-item.json
 *
 * @property string $id
 * @property string $code
 * @property string $name
 */
final class CountryItem extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'code' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'code' => false, 'name' => false];
}
