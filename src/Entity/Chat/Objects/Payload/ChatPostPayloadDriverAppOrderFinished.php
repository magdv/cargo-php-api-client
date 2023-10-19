<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - водитель завершил перевозку
 * source: chat/objects/payload/chat-post-payload-driver-app-order-finished.json
 *
 * @property string $type
 * @property string $driverName
 * @property string $pointName
 */
final class ChatPostPayloadDriverAppOrderFinished extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'driverName' => ['string'], 'pointName' => ['string']];
    protected static $nullables = ['type' => false, 'driverName' => false, 'pointName' => false];
}
