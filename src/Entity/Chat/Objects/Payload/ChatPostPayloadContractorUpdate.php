<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Обновление контрагента
 * source: chat/objects/payload/chat-post-payload-contractor-update.json
 *
 * @property string $type
 * @property int $historyId
 */
final class ChatPostPayloadContractorUpdate extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'historyId' => ['int']];
    protected static $nullables = ['type' => false, 'historyId' => false];
}
