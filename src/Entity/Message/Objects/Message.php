<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: message/objects/message.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сообщение в ЛК
 * source: message/objects/message.json
 *
 * @property string $id
 * @property bool $isRead
 * @property string $type
 * @property \stdClass $context
 * @property string $subject
 * @property string $text
 * @property string $createDate
 * @property MessageAccess $access
 */
final class Message extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'isRead' => ['bool'],
        'type' => ['string'],
        'context' => ['\stdClass'],
        'subject' => ['string'],
        'text' => ['string'],
        'createDate' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Message\Objects\MessageAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'isRead' => false,
        'type' => false,
        'context' => true,
        'subject' => false,
        'text' => false,
        'createDate' => false,
        'access' => false,
    ];
}
