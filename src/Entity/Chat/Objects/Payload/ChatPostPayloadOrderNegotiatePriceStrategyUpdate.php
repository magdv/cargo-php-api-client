<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Заказчик изменил способ согласования цены в заявке.
 * source: chat/objects/payload/chat-post-payload-order-negotiate-price-strategy-update.json
 *
 * @property string $type
 * @property string $stepBid
 * @property string $endDate
 */
final class ChatPostPayloadOrderNegotiatePriceStrategyUpdate extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'stepBid' => ['string'], 'endDate' => ['string']];
    protected static $nullables = ['type' => false, 'stepBid' => false, 'endDate' => false];
}
