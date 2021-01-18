<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные вложения - компания
 * source: chat/objects/payload/chat-post-payload-company.json
 *
 * @property string $id
 * @property string $shortName
 * @property string $logo
 */
final class ChatPostPayloadCompany extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'shortName' => ['string'], 'logo' => ['string']];
    protected static $nullables = ['id' => false, 'shortName' => false, 'logo' => false];
}
