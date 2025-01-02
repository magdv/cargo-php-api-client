<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PriceValue;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorPriceValueV2;

/**
 * Цены по направлению
 * source: order/Common/responses/order-draft-expeditor-price-v2-response.json#/properties/data
 *
 * @property OrderDraftExpeditorPriceValueV2 $consignorPrice
 * @property PriceValue $carrierPrice
 */
final class OrderDraftExpeditorPriceV2ResponseData extends AbstractEntity
{
    protected static $types = [
        'consignorPrice' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorPriceValueV2'],
        'carrierPrice' => ['Cargomart\ApiClient\Entity\Base\PriceValue'],
    ];

    protected static $nullables = ['consignorPrice' => false, 'carrierPrice' => false];
}
