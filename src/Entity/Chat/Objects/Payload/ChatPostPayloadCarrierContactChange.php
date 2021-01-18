<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - добавление/удаление куратора перевозчика у заказа
 * source: chat/objects/payload/chat-post-payload-carrier-contact-change.json
 *
 * @property ChatPostPayloadCarrierContactChangeCreate $create
 * @property ChatPostPayloadCarrierContactChangeDelete $delete
 */
final class ChatPostPayloadCarrierContactChange extends AbstractEntity
{
    protected static $types = [
        'create' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadCarrierContactChangeCreate'],
        'delete' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadCarrierContactChangeDelete'],
    ];

    protected static $nullables = ['create' => false, 'delete' => false];
}
