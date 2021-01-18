<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Пользователи
 * source: chat/objects/payload/chat-post-payload-carrier-contact-change.json#/properties/delete#/properties/users
 *
 * @property int $id
 * @property string $name
 */
final class ChatPostPayloadCarrierContactChangeDeleteUsers extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'name' => false];
}
