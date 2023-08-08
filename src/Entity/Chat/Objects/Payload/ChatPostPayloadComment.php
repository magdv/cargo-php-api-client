<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - комментарий пользователя
 * source: chat/objects/payload/chat-post-payload-comment.json
 *
 * @property string $type
 * @property string $comment
 */
final class ChatPostPayloadComment extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'comment' => ['string']];
    protected static $nullables = ['type' => false, 'comment' => false];
}
