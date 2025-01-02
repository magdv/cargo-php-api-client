<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderCategoryStatisticsItem;

/**
 * source: order/Common/responses/order-category-statistics-response.json#/properties/data
 *
 * @property OrderCategoryStatisticsItem[] $items
 * @property string $title
 */
final class OrderCategoryStatisticsResponseData extends AbstractEntity
{
    protected static $types = [
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderCategoryStatisticsItem'],
        'title' => ['string'],
    ];

    protected static $nullables = ['items' => false, 'title' => false];
}
