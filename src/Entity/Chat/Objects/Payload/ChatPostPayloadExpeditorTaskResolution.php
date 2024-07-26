<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - резолюция по задаче экспедитора
 * source: chat/objects/payload/chat-post-payload-expeditor-task-resolution.json
 *
 * @property string $resolution
 * @property string $comment
 * @property string $type
 * @property string $taskType
 * @property string $firstStoragePointTitle
 * @property string $title
 */
final class ChatPostPayloadExpeditorTaskResolution extends AbstractEntity
{
    protected static $types = [
        'resolution' => ['string'],
        'comment' => ['string'],
        'type' => ['string'],
        'taskType' => ['string'],
        'firstStoragePointTitle' => ['string'],
        'title' => ['string'],
    ];

    protected static $nullables = [
        'resolution' => false,
        'comment' => false,
        'type' => false,
        'taskType' => false,
        'firstStoragePointTitle' => false,
        'title' => false,
    ];
}
