<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/chat-post-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов сообщению чата
 * source: chat/objects/chat-post-access.json
 *
 * @property bool $delete
 * @property bool $update
 */
final class ChatPostAccess extends AbstractEntity
{
    protected static $types = ['delete' => ['bool'], 'update' => ['bool']];
    protected static $nullables = ['delete' => false, 'update' => false];
}
