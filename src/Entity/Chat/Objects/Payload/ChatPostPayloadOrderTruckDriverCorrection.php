<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - идентификаторы заказа и запроса на изменение водителя и машины в заказе
 * source: chat/objects/payload/chat-post-payload-order-truck-driver-correction.json
 *
 * @property string $orderId
 * @property int $correctionId
 * @property string $reason
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 */
final class ChatPostPayloadOrderTruckDriverCorrection extends AbstractEntity
{
    protected static $types = [
        'orderId' => ['string'],
        'correctionId' => ['int'],
        'reason' => ['string'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
    ];

    protected static $nullables = [
        'orderId' => false,
        'correctionId' => false,
        'reason' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
    ];
}
