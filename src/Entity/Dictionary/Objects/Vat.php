<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Dictionary\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект элемента списка справочника НДС
 * source: dictionary/objects/vat.json
 *
 * @property string $id
 * @property string $name
 * @property float $value
 */
final class Vat extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'name' => ['string'], 'value' => ['float']];
    protected static $nullables = ['id' => false, 'name' => false, 'value' => false];
}
