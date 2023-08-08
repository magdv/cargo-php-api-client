<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Документы были отклонены
 * source: chat/objects/payload/chat-post-payload-original-documents-reject.json
 *
 * @property string $type
 * @property string $reason
 */
final class ChatPostPayloadOriginalDocumentsReject extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'reason' => ['string']];
    protected static $nullables = ['type' => false, 'reason' => false];
}
