<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные пользователя по сообщению
 * source: chat/objects/chat-post-user-data.json
 *
 * @property bool $isRead
 */
final class ChatPostUserData extends AbstractEntity
{
    protected static $types = ['isRead' => ['bool']];
    protected static $nullables = ['isRead' => false];
}
