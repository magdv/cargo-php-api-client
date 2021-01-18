<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к критерию поиска
 * source: order/objects/order-search-criteria-access.json
 *
 * @property bool $update
 * @property bool $delete
 */
final class OrderSearchCriteriaAccess extends AbstractEntity
{
    protected static $types = ['update' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['update' => false, 'delete' => false];
}
