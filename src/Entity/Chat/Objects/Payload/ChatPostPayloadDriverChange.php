<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - смена водителя
 * source: chat/objects/payload/chat-post-payload-driver-change.json
 *
 * @property string $operation
 * @property ChatPostPayloadDriverChangeDriver $driver
 */
final class ChatPostPayloadDriverChange extends AbstractEntity
{
    protected static $types = [
        'operation' => ['string'],
        'driver' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadDriverChangeDriver'],
    ];

    protected static $nullables = ['operation' => false, 'driver' => false];
}
