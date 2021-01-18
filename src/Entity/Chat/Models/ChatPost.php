<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAccess;
use Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAttachment;
use Cargomart\ApiClient\Entity\Chat\Objects\ChatPostUserData;

/**
 * Сообщение чата
 * source: chat/models/chat-post.json
 *
 * @property int $id
 * @property string $companyId
 * @property int $creatorId
 * @property string $kind
 * @property string $type
 * @property \stdClass $payload
 * @property string $message
 * @property string $createDate
 * @property ChatPostAttachment[] $attachment
 * @property ChatPostUserData $userData
 * @property ChatPostAccess $access
 */
final class ChatPost extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'companyId' => ['string'],
        'creatorId' => ['int'],
        'kind' => ['string'],
        'type' => ['string'],
        'payload' => ['\stdClass'],
        'message' => ['string'],
        'createDate' => ['string'],
        'attachment' => ['array', 'Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAttachment'],
        'userData' => ['Cargomart\ApiClient\Entity\Chat\Objects\ChatPostUserData'],
        'access' => ['Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'companyId' => false,
        'creatorId' => false,
        'kind' => false,
        'type' => false,
        'payload' => true,
        'message' => false,
        'createDate' => false,
        'attachment' => false,
        'userData' => false,
        'access' => false,
    ];
}
