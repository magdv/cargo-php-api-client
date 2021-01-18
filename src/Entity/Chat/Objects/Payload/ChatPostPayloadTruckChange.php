<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Truck\Objects\TruckOld;

/**
 * Данные вложения - смена транспорта
 * source: chat/objects/payload/chat-post-payload-truck-change.json
 *
 * @property string $operation
 * @property TruckOld[] $truck
 */
final class ChatPostPayloadTruckChange extends AbstractEntity
{
    protected static $types = [
        'operation' => ['string'],
        'truck' => ['array', 'Cargomart\ApiClient\Entity\Truck\Objects\TruckOld'],
    ];

    protected static $nullables = ['operation' => false, 'truck' => false];
}
