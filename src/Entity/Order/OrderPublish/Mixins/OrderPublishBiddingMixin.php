<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderPublish\Mixins;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Поля для параметров торгов
 * source: order/OrderPublish/mixins/order-publish-bidding-mixin.json
 *
 * @property string $price
 * @property string $stepBid
 * @property string $biddingType
 */
final class OrderPublishBiddingMixin extends AbstractEntity
{
    protected static $types = ['price' => ['string'], 'stepBid' => ['string'], 'biddingType' => ['string']];
    protected static $nullables = ['price' => false, 'stepBid' => false, 'biddingType' => false];
}
