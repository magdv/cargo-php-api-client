<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - заказ
 * source: chat/objects/payload/chat-post-payload-order.json
 *
 * @property string $id
 * @property int $serialId
 * @property ChatPostPayloadOrderPoint[] $point
 */
final class ChatPostPayloadOrder extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'serialId' => ['int'],
        'point' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadOrderPoint'],
    ];

    protected static $nullables = ['id' => false, 'serialId' => false, 'point' => false];
}
