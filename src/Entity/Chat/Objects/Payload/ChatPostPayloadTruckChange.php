<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - смена транспорта
 * source: chat/objects/payload/chat-post-payload-truck-change.json
 *
 * @property string $type
 * @property string $operation
 * @property ChatPostPayloadTruckChangeTruck $truck
 */
final class ChatPostPayloadTruckChange extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'operation' => ['string'],
        'truck' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadTruckChangeTruck'],
    ];

    protected static $nullables = ['type' => false, 'operation' => false, 'truck' => false];
}
