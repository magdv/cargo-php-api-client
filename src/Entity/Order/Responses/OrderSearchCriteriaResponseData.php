<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-search-criteria-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderSearchTruckFilter;

/**
 * source: order/responses/order-search-criteria-response.json#/properties/data
 *
 * @property OrderSearchTruckFilter $truckFilter
 * @property Locality[] $locality
 */
final class OrderSearchCriteriaResponseData extends AbstractEntity
{
    protected static $types = [
        'truckFilter' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderSearchTruckFilter'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['truckFilter' => false, 'locality' => false];
}
