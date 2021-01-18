<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - смена ссылки
 * source: chat/objects/payload/chat-post-payload-url-change.json
 *
 * @property string $operation
 * @property string $url
 */
final class ChatPostPayloadUrlChange extends AbstractEntity
{
    protected static $types = ['operation' => ['string'], 'url' => ['string']];
    protected static $nullables = ['operation' => false, 'url' => false];
}
