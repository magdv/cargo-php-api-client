<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/Common/responses/OrderDraftExpeditorRecommendedPriceResponse.json#/properties/data
 *
 * @property OrderDraftExpeditorRecommendedPriceResponseDataRecommendedPrice $recommendedPrice
 */
final class OrderDraftExpeditorRecommendedPriceResponseData extends AbstractEntity
{
    protected static $types = [
        'recommendedPrice' => [
            'Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorRecommendedPriceResponseDataRecommendedPrice',
        ],
    ];

    protected static $nullables = ['recommendedPrice' => false];
}
