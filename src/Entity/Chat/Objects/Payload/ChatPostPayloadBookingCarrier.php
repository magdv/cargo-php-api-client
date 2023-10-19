<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Перевозчик
 * source: chat/objects/payload/chat-post-payload-booking.json#/properties/carrier
 *
 * @property string $name
 * @property string $hash
 */
final class ChatPostPayloadBookingCarrier extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'hash' => ['string']];
    protected static $nullables = ['name' => false, 'hash' => false];
}
