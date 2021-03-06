<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderSearchTruckFilter;

/**
 * source: order/responses/order-search-criteria-list-response.json#/properties/data
 *
 * @property OrderSearchTruckFilter[] $truckFilter
 * @property Locality[] $locality
 */
final class OrderSearchCriteriaListResponseData extends AbstractEntity
{
    protected static $types = [
        'truckFilter' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderSearchTruckFilter'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['truckFilter' => false, 'locality' => false];
}
