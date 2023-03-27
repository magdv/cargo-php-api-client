<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-draft-expeditor-price-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PriceValue;

/**
 * Цены по направлению
 * source: order/responses/order-draft-expeditor-price-response.json#/properties/data
 *
 * @property PriceValue $consignorPrice
 * @property PriceValue $carrierPrice
 */
final class OrderDraftExpeditorPriceResponseData extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
    ];

    protected static $nullables = ['consignorPrice' => false, 'carrierPrice' => false];
}
