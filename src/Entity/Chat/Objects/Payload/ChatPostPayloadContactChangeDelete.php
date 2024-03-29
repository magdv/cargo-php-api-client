<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: chat/objects/payload/chat-post-payload-contact-change.json#/properties/delete
 *
 * @property string $operation
 * @property ChatPostPayloadContactChangeDeleteUsers[] $users
 */
final class ChatPostPayloadContactChangeDelete extends AbstractEntity
{
    protected static $types = [
        'operation' => ['string'],
        'users' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadContactChangeDeleteUsers'],
    ];

    protected static $nullables = ['operation' => false, 'users' => false];
}
