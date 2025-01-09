<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект с рекомендованной ценой для заказа
 * source: order/Common/responses/OrderDraftExpeditorRecommendedPriceResponse.json#/properties/data#/properties/recommendedPrice
 *
 * @property string $consignorPrice
 * @property string $carrierPrice
 */
final class OrderDraftExpeditorRecommendedPriceResponseDataRecommendedPrice extends AbstractEntity
{
    protected static $types = ['consignorPrice' => ['string'], 'carrierPrice' => ['string']];
    protected static $nullables = ['consignorPrice' => false, 'carrierPrice' => false];
}
