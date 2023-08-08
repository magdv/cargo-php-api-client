<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - идентификаторы заказа и запроса на изменение заказа
 * source: chat/objects/payload/chat-post-payload-order-patch.json
 *
 * @property string $type
 * @property string $orderHash
 * @property string $orderPatchId
 * @property string $comment
 * @property string $commentForConsignor
 * @property string $commentForCarrier
 * @property \stdClass $newValues
 */
final class ChatPostPayloadOrderPatch extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'orderHash' => ['string'],
        'orderPatchId' => ['string'],
        'comment' => ['string'],
        'commentForConsignor' => ['string'],
        'commentForCarrier' => ['string'],
        'newValues' => ['\stdClass'],
    ];

    protected static $nullables = [
        'type' => false,
        'orderHash' => false,
        'orderPatchId' => false,
        'comment' => false,
        'commentForConsignor' => false,
        'commentForCarrier' => false,
        'newValues' => true,
    ];
}
