<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект критерия поиска
 * source: order/Common/objects/order-search-criteria.json
 *
 * @property int $truckId
 * @property string $departureCode
 * @property string $fromDate
 */
final class OrderSearchCriteria extends AbstractEntity
{
    protected static $types = ['truckId' => ['int'], 'departureCode' => ['string'], 'fromDate' => ['string']];
    protected static $nullables = ['truckId' => false, 'departureCode' => false, 'fromDate' => false];
}
