<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Order\Objects\SmallCarrierOrder;

/**
 * source: order/responses/truck-order-queue-response.json#/properties/data
 *
 * @property SmallCarrierOrder[] $orders
 * @property Pagination $pagination
 */
final class TruckOrderQueueResponseData extends AbstractEntity
{
    protected static $types = [
        'orders' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\SmallCarrierOrder'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['orders' => false, 'pagination' => false];
}
