<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Requests;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAttachment;

/**
 * Создание записи в чат
 * source: chat/requests/chat-new-post-request.json
 *
 * @property string $message
 * @property ChatPostAttachment[] $attachment
 */
final class ChatNewPostRequest extends AbstractEntity
{
    protected static $types = [
        'message' => ['string'],
        'attachment' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAttachment'],
    ];

    protected static $nullables = ['message' => false, 'attachment' => false];
}
