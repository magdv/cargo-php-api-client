<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-category-statistics-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные о заказах по категориям
 * source: order/objects/order-category-statistics-item.json
 *
 * @property int $percent
 * @property string $category
 */
final class OrderCategoryStatisticsItem extends AbstractEntity
{
    protected static $types = ['percent' => ['int'], 'category' => ['string']];
    protected static $nullables = ['percent' => false, 'category' => false];
}
