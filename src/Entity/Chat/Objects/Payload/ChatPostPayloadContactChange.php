<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - добавление/удаление куратора у заказа
 * source: chat/objects/payload/chat-post-payload-contact-change.json
 *
 * @property string $type
 * @property ChatPostPayloadContactChangeCreate $create
 * @property ChatPostPayloadContactChangeDelete $delete
 */
final class ChatPostPayloadContactChange extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'create' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadContactChangeCreate'],
        'delete' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadContactChangeDelete'],
    ];

    protected static $nullables = ['type' => false, 'create' => false, 'delete' => false];
}
