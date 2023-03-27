<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-price-type-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект тип цены заказа
 * source: order/objects/order-price-type-item.json
 *
 * @property string $code
 * @property string $name
 * @property string $short
 */
final class OrderPriceTypeItem extends AbstractEntity
{
    protected static $types = ['code' => ['string'], 'name' => ['string'], 'short' => ['string']];
    protected static $nullables = ['code' => false, 'name' => false, 'short' => false];
}
