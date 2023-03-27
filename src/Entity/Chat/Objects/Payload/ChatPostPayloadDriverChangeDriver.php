<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-driver-change.json#/properties/driver
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: chat/objects/payload/chat-post-payload-driver-change.json#/properties/driver
 *
 * @property int $id
 * @property string $name
 * @property string $birthDate
 * @property string $phone
 * @property string[] $phones
 */
final class ChatPostPayloadDriverChangeDriver extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'name' => ['string'],
        'birthDate' => ['string'],
        'phone' => ['string'],
        'phones' => ['array', 'string'],
    ];

    protected static $nullables = [
        'id' => false,
        'name' => false,
        'birthDate' => false,
        'phone' => false,
        'phones' => false,
    ];
}
