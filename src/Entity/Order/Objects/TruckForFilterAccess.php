<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов
 * source: order/objects/truck-for-filter.json#/properties/access
 *
 * @property bool $createSearchCriteria
 */
final class TruckForFilterAccess extends AbstractEntity
{
    protected static $types = ['createSearchCriteria' => ['bool']];
    protected static $nullables = ['createSearchCriteria' => false];
}
