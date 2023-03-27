<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-contractor-update.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Обновление контрагента
 * source: chat/objects/payload/chat-post-payload-contractor-update.json
 *
 * @property int $historyId
 */
final class ChatPostPayloadContractorUpdate extends AbstractEntity
{
    protected static $types = ['historyId' => ['int']];
    protected static $nullables = ['historyId' => false];
}
