<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\TemperatureRange;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\Common\Objects\OrderNegotiateOfferPoint;

/**
 * Запрос изменения заказчиком условий заявки, чтобы ближе соответствовать поступившим предложениям от перевозчиков
 * source: order/Common/requests/order-negotiate-request.json
 *
 * @property string $price
 * @property OrderNegotiateOfferPoint[] $routePoint
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 * @property TemperatureRange $temperature
 */
final class OrderNegotiateRequest extends AbstractEntity
{
    protected static $types = [
        'price' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Common\Objects\OrderNegotiateOfferPoint'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Common\Objects\OrderDraftExpeditorBidding'],
        'temperature' => ['Cargomart\ApiClient\Entity\Base\TemperatureRange'],
    ];

    protected static $nullables = [
        'price' => false,
        'routePoint' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
        'temperature' => false,
    ];
}
