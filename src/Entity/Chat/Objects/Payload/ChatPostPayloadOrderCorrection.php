<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - идентификаторы заказа и запроса на изменение заказа
 * source: chat/objects/payload/chat-post-payload-order-correction.json
 *
 * @property string $type
 * @property int $orderId
 * @property int $correctionId
 * @property string $comment
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 */
final class ChatPostPayloadOrderCorrection extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'orderId' => ['int'],
        'correctionId' => ['int'],
        'comment' => ['string'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'orderId' => false,
        'correctionId' => false,
        'comment' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
    ];
}
