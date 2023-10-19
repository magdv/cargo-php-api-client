<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - изменение водителем статуса пункта маршрута заказа
 * source: chat/objects/payload/chat-post-payload-driver-app-order-point-status.json
 *
 * @property string $type
 * @property string $driverName
 * @property string $pointName
 * @property string $driverAppOrderPointStatus
 */
final class ChatPostPayloadDriverAppOrderPointStatus extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'driverName' => ['string'],
        'pointName' => ['string'],
        'driverAppOrderPointStatus' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'driverName' => false,
        'pointName' => false,
        'driverAppOrderPointStatus' => false,
    ];
}
