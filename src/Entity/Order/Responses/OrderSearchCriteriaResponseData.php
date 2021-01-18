<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderSearchCriteria;

/**
 * source: order/responses/order-search-criteria-response.json#/properties/data
 *
 * @property OrderSearchCriteria $searchCriteria
 * @property Locality[] $locality
 */
final class OrderSearchCriteriaResponseData extends AbstractEntity
{
    protected static $types = [
        'searchCriteria' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderSearchCriteria'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
    ];

    protected static $nullables = ['searchCriteria' => false, 'locality' => false];
}
