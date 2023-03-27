<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-order-refuse.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - отказ
 * source: chat/objects/payload/chat-post-payload-order-refuse.json
 *
 * @property string $code
 * @property string $comment
 */
final class ChatPostPayloadOrderRefuse extends AbstractEntity
{
    protected static $types = ['code' => ['string'], 'comment' => ['string']];
    protected static $nullables = ['code' => false, 'comment' => false];
}
