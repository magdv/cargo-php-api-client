<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Изменение трек номера документов
 * source: chat/objects/payload/chat-post-payload-original-documents-tracking-number-change.json
 *
 * @property string $type
 * @property string $operation
 * @property string $trackingNumber
 * @property string $postServiceName
 */
final class ChatPostPayloadOriginalDocumentsTrackingNumberChange extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'operation' => ['string'],
        'trackingNumber' => ['string'],
        'postServiceName' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'operation' => false,
        'trackingNumber' => false,
        'postServiceName' => false,
    ];
}
