<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/order-draft-expeditor-bidding.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Настройки торгов
 * source: order/objects/order-draft-expeditor-bidding.json
 *
 * @property string $stepBid
 * @property string $endDate
 */
final class OrderDraftExpeditorBidding extends AbstractEntity
{
    protected static $types = ['stepBid' => ['string'], 'endDate' => ['string']];
    protected static $nullables = ['stepBid' => false, 'endDate' => false];
}
