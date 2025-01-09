<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - откладывание задачи экспедитора
 * source: chat/objects/payload/chat-post-payload-expeditor-task-freeze.json
 *
 * @property string $type
 * @property string $taskType
 * @property string $firstStoragePointTitle
 * @property string $comment
 * @property string $title
 */
final class ChatPostPayloadExpeditorTaskFreeze extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'taskType' => ['string'],
        'firstStoragePointTitle' => ['string'],
        'comment' => ['string'],
        'title' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'taskType' => false,
        'firstStoragePointTitle' => false,
        'comment' => false,
        'title' => false,
    ];
}
