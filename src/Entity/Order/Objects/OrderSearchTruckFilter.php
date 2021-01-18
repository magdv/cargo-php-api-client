<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект фильтра по машине
 * source: order/objects/order-search-truck-filter.json
 *
 * @property TruckForFilter $truck
 * @property OrderSearchCriteria $searchCriteria
 */
final class OrderSearchTruckFilter extends AbstractEntity
{
    protected static $types = [
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\TruckForFilter'],
        'searchCriteria' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderSearchCriteria'],
    ];

    protected static $nullables = ['truck' => false, 'searchCriteria' => false];
}
