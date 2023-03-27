<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-ids-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;

/**
 * source: order/responses/order-ids-response.json#/properties/data
 *
 * @property string[] $order
 * @property Pagination $pagination
 */
final class OrderIdsResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['array', 'string'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
    ];

    protected static $nullables = ['order' => false, 'pagination' => false];
}
