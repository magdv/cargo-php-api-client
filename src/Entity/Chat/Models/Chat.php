<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Models;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект описания чата
 * source: chat/models/chat.json
 *
 * @property string $id
 * @property string[] $participant
 * @property int $lastId
 * @property string $type
 * @property string $name
 */
final class Chat extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'participant' => ['array', 'string'],
        'lastId' => ['int'],
        'type' => ['string'],
        'name' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'participant' => false,
        'lastId' => false,
        'type' => false,
        'name' => false,
    ];
}
