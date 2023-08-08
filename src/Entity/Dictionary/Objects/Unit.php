<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект единицы измерения
 * source: dictionary/objects/unit.json
 *
 * @property string $id
 * @property string $sign
 */
final class Unit extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'sign' => ['string']];
    protected static $nullables = ['id' => false, 'sign' => false];
}
