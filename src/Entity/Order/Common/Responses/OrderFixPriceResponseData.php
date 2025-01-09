<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderFixedPrice;

/**
 * Общий ответ
 * source: order/Common/responses/order-fix-price-response.json#/properties/data
 *
 * @property OrderFixedPrice $orderFixedPrice
 */
final class OrderFixPriceResponseData extends AbstractEntity
{
    protected static $types = ['orderFixedPrice' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderFixedPrice']];
    protected static $nullables = ['orderFixedPrice' => false];
}
