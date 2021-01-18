<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\Objects\OrderTruck;

/**
 * Данные вложения - смена транспорта
 * source: chat/objects/payload/chat-post-payload-truck-change-v2.json
 *
 * @property string $operation
 * @property OrderTruck $truck
 */
final class ChatPostPayloadTruckChangeV2 extends AbstractEntity
{
    protected static $types = [
        'operation' => ['string'],
        'truck' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderTruck'],
    ];

    protected static $nullables = ['operation' => false, 'truck' => false];
}
