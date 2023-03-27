<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-price-type-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderPriceTypeItem;

/**
 * Common response data
 * source: order/responses/order-price-type-response.json#/properties/data
 *
 * @property OrderPriceTypeItem[] $priceType
 */
final class OrderPriceTypeResponseData extends AbstractEntity
{
    protected static $types = ['priceType' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderPriceTypeItem']];
    protected static $nullables = ['priceType' => false];
}
