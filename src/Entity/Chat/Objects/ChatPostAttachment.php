<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Вложение сообщения чата
 * source: chat/objects/chat-post-attachment.json
 *
 * @property string $type
 * @property \stdClass $payload
 */
final class ChatPostAttachment extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'payload' => ['\stdClass']];
    protected static $nullables = ['type' => false, 'payload' => true];
}
