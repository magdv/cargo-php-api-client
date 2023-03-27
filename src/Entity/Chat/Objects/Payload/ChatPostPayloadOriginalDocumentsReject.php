<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-original-documents-reject.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Документы были отклонены
 * source: chat/objects/payload/chat-post-payload-original-documents-reject.json
 *
 * @property string $reason
 */
final class ChatPostPayloadOriginalDocumentsReject extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}
