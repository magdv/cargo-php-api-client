<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - электронные ящики
 * source: chat/objects/payload/chat-post-payload-emails.json
 *
 * @property string $type
 * @property string[] $emails
 */
final class ChatPostPayloadEmails extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'emails' => ['array', 'string']];
    protected static $nullables = ['type' => false, 'emails' => false];
}
