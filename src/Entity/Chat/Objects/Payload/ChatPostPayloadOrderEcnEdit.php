<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileUrl;

/**
 * Исправление ТРН
 * source: chat/objects/payload/chat-post-payload-order-ecn-edit.json
 *
 * @property string $type
 * @property string $creatorFio
 * @property string $eventDate
 * @property string $ecnType
 * @property string $number
 * @property string $ecnDate
 * @property FileUrl $oldPdfVersionFile
 */
final class ChatPostPayloadOrderEcnEdit extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'creatorFio' => ['string'],
        'eventDate' => ['string'],
        'ecnType' => ['string'],
        'number' => ['string'],
        'ecnDate' => ['string'],
        'oldPdfVersionFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
    ];

    protected static $nullables = [
        'type' => false,
        'creatorFio' => false,
        'eventDate' => false,
        'ecnType' => false,
        'number' => false,
        'ecnDate' => false,
        'oldPdfVersionFile' => false,
    ];
}
