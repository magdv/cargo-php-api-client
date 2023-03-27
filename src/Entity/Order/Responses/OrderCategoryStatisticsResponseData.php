<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-category-statistics-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderCategoryStatisticsItem;

/**
 * source: order/responses/order-category-statistics-response.json#/properties/data
 *
 * @property OrderCategoryStatisticsItem[] $items
 * @property string $title
 */
final class OrderCategoryStatisticsResponseData extends AbstractEntity
{
    protected static $types = [
        'items' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderCategoryStatisticsItem'],
        'title' => ['string'],
    ];

    protected static $nullables = ['items' => false, 'title' => false];
}
