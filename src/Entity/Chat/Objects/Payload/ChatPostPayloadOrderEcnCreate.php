<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создана ТРН
 * source: chat/objects/payload/chat-post-payload-order-ecn-create.json
 *
 * @property string $type
 * @property string $creatorFio
 * @property string $eventDate
 * @property string $ecnType
 * @property string $operator
 * @property string $number
 * @property string $ecnDate
 */
final class ChatPostPayloadOrderEcnCreate extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'creatorFio' => ['string'],
        'eventDate' => ['string'],
        'ecnType' => ['string'],
        'operator' => ['string'],
        'number' => ['string'],
        'ecnDate' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'creatorFio' => false,
        'eventDate' => false,
        'ecnType' => false,
        'operator' => false,
        'number' => false,
        'ecnDate' => false,
    ];
}
