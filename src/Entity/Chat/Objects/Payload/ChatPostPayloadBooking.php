<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - бронирование
 * source: chat/objects/payload/chat-post-payload-booking.json
 *
 * @property string $type
 * @property ChatPostPayloadBookingCarrier $carrier
 */
final class ChatPostPayloadBooking extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'carrier' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadBookingCarrier'],
    ];

    protected static $nullables = ['type' => false, 'carrier' => false];
}
