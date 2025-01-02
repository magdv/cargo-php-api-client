<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderPriceTypeItem;

/**
 * Common response data
 * source: order/Common/responses/order-price-type-response.json#/properties/data
 *
 * @property OrderPriceTypeItem[] $priceType
 */
final class OrderPriceTypeResponseData extends AbstractEntity
{
    protected static $types = [
        'priceType' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderPriceTypeItem'],
    ];

    protected static $nullables = ['priceType' => false];
}
