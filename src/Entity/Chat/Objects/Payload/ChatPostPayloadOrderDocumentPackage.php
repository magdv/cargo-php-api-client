<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - пакет документов по заявке
 * source: chat/objects/payload/chat-post-payload-order-document-package.json
 *
 * @property string $type
 * @property string $packageId
 * @property string $reason
 * @property string[] $fileIds
 * @property string[] $fileUrls
 */
final class ChatPostPayloadOrderDocumentPackage extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'packageId' => ['string'],
        'reason' => ['string'],
        'fileIds' => ['array', 'string'],
        'fileUrls' => ['array', 'string'],
    ];

    protected static $nullables = [
        'type' => false,
        'packageId' => false,
        'reason' => false,
        'fileIds' => false,
        'fileUrls' => false,
    ];
}
