<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - информация по задаче экспедитора
 * source: chat/objects/payload/chat-post-payload-expeditor-task.json
 *
 * @property string $type
 * @property string $taskType
 * @property string $firstStoragePointTitle
 * @property string $title
 */
final class ChatPostPayloadExpeditorTask extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'taskType' => ['string'],
        'firstStoragePointTitle' => ['string'],
        'title' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'taskType' => false,
        'firstStoragePointTitle' => false,
        'title' => false,
    ];
}
