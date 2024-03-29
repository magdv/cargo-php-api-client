<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PriceValue;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorPriceValue;

/**
 * Цены по направлению
 * source: order/responses/order-draft-expeditor-price-response.json#/properties/data
 *
 * @property OrderDraftExpeditorPriceValue $consignorPrice
 * @property PriceValue $carrierPrice
 */
final class OrderDraftExpeditorPriceResponseData extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorPriceValue'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
    ];

    protected static $nullables = ['consignorPrice' => false, 'carrierPrice' => false];
}
