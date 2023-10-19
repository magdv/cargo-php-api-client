<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пустые дополнительные данные сообщения чата
 * source: chat/objects/payload/chat-post-payload-empty.json
 *
 * @property string $type
 */
final class ChatPostPayloadEmpty extends AbstractEntity
{
    protected static $types = ['type' => ['string']];
    protected static $nullables = ['type' => false];
}
