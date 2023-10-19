<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - смена транспорта
 * source: chat/objects/payload/chat-post-payload-truck-change-v2.json
 *
 * @property string $type
 * @property string $operation
 * @property ChatPostPayloadTruckChangeV2Truck $truck
 */
final class ChatPostPayloadTruckChangeV2 extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'operation' => ['string'],
        'truck' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadTruckChangeV2Truck'],
    ];

    protected static $nullables = ['type' => false, 'operation' => false, 'truck' => false];
}
