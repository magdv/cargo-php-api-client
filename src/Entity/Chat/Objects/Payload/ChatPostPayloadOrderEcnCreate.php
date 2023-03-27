<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-order-ecn-create.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создана ТРН
 * source: chat/objects/payload/chat-post-payload-order-ecn-create.json
 *
 * @property string $creatorFio
 * @property string $eventDate
 * @property string $ecnType
 * @property string $number
 * @property string $ecnDate
 */
final class ChatPostPayloadOrderEcnCreate extends AbstractEntity
{
    protected static $types = [
        'creatorFio' => ['string'],
        'eventDate' => ['string'],
        'ecnType' => ['string'],
        'number' => ['string'],
        'ecnDate' => ['string'],
    ];

    protected static $nullables = [
        'creatorFio' => false,
        'eventDate' => false,
        'ecnType' => false,
        'number' => false,
        'ecnDate' => false,
    ];
}
