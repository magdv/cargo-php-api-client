<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - изменение полей объека
 * source: chat/objects/payload/chat-post-payload-model-field-change.json
 *
 * @property string $type
 * @property string $message
 * @property ChatPostPayloadModelFieldChangeChanges[] $changes
 */
final class ChatPostPayloadModelFieldChange extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'message' => ['string'],
        'changes' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadModelFieldChangeChanges'],
    ];

    protected static $nullables = ['type' => false, 'message' => false, 'changes' => false];
}
