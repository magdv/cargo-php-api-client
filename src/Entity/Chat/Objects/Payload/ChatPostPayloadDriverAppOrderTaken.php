<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Водитель начал перевозку
 * source: chat/objects/payload/chat-post-payload-driver-app-order-taken.json
 *
 * @property string $type
 */
final class ChatPostPayloadDriverAppOrderTaken extends AbstractEntity
{
    protected static $types = ['type' => ['string']];
    protected static $nullables = ['type' => false];
}
