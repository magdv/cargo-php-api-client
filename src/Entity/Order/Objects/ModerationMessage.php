<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/objects/moderation-message.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект сообщения о модерации ГП
 * source: order/objects/moderation-message.json
 *
 * @property int $id
 * @property string $message
 * @property int $creatorId
 * @property string $createDate
 */
final class ModerationMessage extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'message' => ['string'],
        'creatorId' => ['int'],
        'createDate' => ['string'],
    ];

    protected static $nullables = ['id' => false, 'message' => false, 'creatorId' => false, 'createDate' => false];
}
