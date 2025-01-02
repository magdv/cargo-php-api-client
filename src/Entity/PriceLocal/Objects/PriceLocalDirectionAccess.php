<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\PriceLocal\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заказу экспедитора
 * source: price-local/objects/price-local-direction-access.json
 *
 * @property bool $delete
 */
final class PriceLocalDirectionAccess extends AbstractEntity
{
    protected static $types = ['delete' => ['bool']];
    protected static $nullables = ['delete' => false];
}
