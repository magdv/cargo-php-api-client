<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\PayValue;

/**
 * Изменение цены в заказе.
 * source: chat/objects/payload/chat-post-payload-order-price-change.json
 *
 * @property string $textPrice
 * @property string $loadingDateTime
 * @property PayValue $consignorPayValue
 * @property PayValue $carrierPayValue
 */
final class ChatPostPayloadOrderPriceChange extends AbstractEntity
{
    protected static $types = [
        'textPrice' => ['string'],
        'loadingDateTime' => ['string'],
        'consignorPayValue' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
        'carrierPayValue' => ['Cargomart\ApiClient\Entity\Base\PayValue'],
    ];

    protected static $nullables = [
        'textPrice' => false,
        'loadingDateTime' => false,
        'consignorPayValue' => false,
        'carrierPayValue' => false,
    ];
}
