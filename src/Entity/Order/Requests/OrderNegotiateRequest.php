<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding;
use Cargomart\ApiClient\Entity\Order\Objects\OrderNegotiateOfferPoint;

/**
 * Запрос изменения заказчиком условий заявки, чтобы ближе соответствовать поступившим предложениям от перевозчиков
 * source: order/requests/order-negotiate-request.json
 *
 * @property string $price
 * @property OrderNegotiateOfferPoint[] $routePoint
 * @property string $priceStrategyType
 * @property string $biddingType
 * @property OrderDraftExpeditorBidding $bidding
 */
final class OrderNegotiateRequest extends AbstractEntity
{
    protected static $types = [
        'price' => ['string'],
        'routePoint' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderNegotiateOfferPoint'],
        'priceStrategyType' => ['string'],
        'biddingType' => ['string'],
        'bidding' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorBidding'],
    ];

    protected static $nullables = [
        'price' => false,
        'routePoint' => false,
        'priceStrategyType' => false,
        'biddingType' => false,
        'bidding' => false,
    ];
}
