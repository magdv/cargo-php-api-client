<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к элементу справочника цен'
 * source: price-local/objects/price-local-access.json
 *
 * @property bool $update
 * @property bool $delete
 */
final class PriceLocalAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}
