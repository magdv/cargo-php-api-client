<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект заказа
 * source: order/Common/objects/bid-pull-info-item.json
 *
 * @property string $id
 * @property string $endDate
 * @property string $currencyCode
 * @property string $openPrice
 * @property string $currentPrice
 * @property string $stepBid
 * @property float $vatRate
 * @property int $bidCount
 * @property bool $isView
 * @property bool $isNoPrice
 * @property string $type
 * @property bool $isPin
 * @property bool $isLastBidMy
 * @property bool $isWasMyBid
 * @property bool $isCurrentUserHasBid
 * @property string $priceType
 */
final class BidPullInfoItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'endDate' => ['string'],
        'currencyCode' => ['string'],
        'openPrice' => ['string'],
        'currentPrice' => ['string'],
        'stepBid' => ['string'],
        'vatRate' => ['float'],
        'bidCount' => ['int'],
        'isView' => ['bool'],
        'isNoPrice' => ['bool'],
        'type' => ['string'],
        'isPin' => ['bool'],
        'isLastBidMy' => ['bool'],
        'isWasMyBid' => ['bool'],
        'isCurrentUserHasBid' => ['bool'],
        'priceType' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'endDate' => false,
        'currencyCode' => false,
        'openPrice' => false,
        'currentPrice' => false,
        'stepBid' => false,
        'vatRate' => false,
        'bidCount' => false,
        'isView' => false,
        'isNoPrice' => false,
        'type' => false,
        'isPin' => false,
        'isLastBidMy' => false,
        'isWasMyBid' => false,
        'isCurrentUserHasBid' => false,
        'priceType' => false,
    ];
}
