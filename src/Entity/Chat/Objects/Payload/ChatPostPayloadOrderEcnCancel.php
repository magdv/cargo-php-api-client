<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-order-ecn-cancel.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\FileUrl;

/**
 * Отмена ТРН
 * source: chat/objects/payload/chat-post-payload-order-ecn-cancel.json
 *
 * @property string $creatorFio
 * @property string $eventDate
 * @property string $ecnType
 * @property string $number
 * @property string $ecnDate
 * @property string $oldEcnType
 * @property string $oldEcnNumber
 * @property string $operator
 * @property string $oldEcnDate
 * @property FileUrl $oldPdfVersionFile
 */
final class ChatPostPayloadOrderEcnCancel extends AbstractEntity
{
    protected static $types = [
        'creatorFio' => ['string'],
        'eventDate' => ['string'],
        'ecnType' => ['string'],
        'number' => ['string'],
        'ecnDate' => ['string'],
        'oldEcnType' => ['string'],
        'oldEcnNumber' => ['string'],
        'operator' => ['string'],
        'oldEcnDate' => ['string'],
        'oldPdfVersionFile' => ['Cargomart\ApiClient\Entity\File\Objects\FileUrl'],
    ];

    protected static $nullables = [
        'creatorFio' => false,
        'eventDate' => false,
        'ecnType' => false,
        'number' => false,
        'ecnDate' => false,
        'oldEcnType' => false,
        'oldEcnNumber' => false,
        'operator' => false,
        'oldEcnDate' => false,
        'oldPdfVersionFile' => false,
    ];
}
