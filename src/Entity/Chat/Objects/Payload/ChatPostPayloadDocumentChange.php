<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\File\Objects\File;

/**
 * Данные вложения - смена документов
 * source: chat/objects/payload/chat-post-payload-document-change.json
 *
 * @property string $operation
 * @property int $documentId
 * @property string $url
 * @property File[] $files
 */
final class ChatPostPayloadDocumentChange extends AbstractEntity
{
    protected static $types = [
        'operation' => ['string'],
        'documentId' => ['int'],
        'url' => ['string'],
        'files' => ['array', 'Cargomart\ApiClient\Entity\File\Objects\File'],
    ];

    protected static $nullables = ['operation' => false, 'documentId' => false, 'url' => false, 'files' => false];
}
