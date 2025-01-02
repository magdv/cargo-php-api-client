<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект фильтра по машине
 * source: order/Common/objects/order-search-truck-filter.json
 *
 * @property TruckForFilter $truck
 * @property OrderSearchCriteria $searchCriteria
 * @property OrderSearchTruckFilterAccess $access
 */
final class OrderSearchTruckFilter extends AbstractEntity
{
    protected static $types = [
        'truck' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\TruckForFilter'],
        'searchCriteria' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderSearchCriteria'],
        'access' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderSearchTruckFilterAccess'],
    ];

    protected static $nullables = ['truck' => false, 'searchCriteria' => false, 'access' => false];
}
