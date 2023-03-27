<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/models/chat-post-order-correction-item.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Models;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAccess;
use Cargomart\ApiClient\Entity\Chat\Objects\ChatPostUserData;
use Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadOrderCorrection;

/**
 * Сообщение чата
 * source: chat/models/chat-post-order-correction-item.json
 *
 * @property int $id
 * @property string $companyId
 * @property int $creatorId
 * @property string $kind
 * @property string $type
 * @property ChatPostPayloadOrderCorrection $payload
 * @property string $message
 * @property string $createDate
 * @property ChatPostUserData $userData
 * @property ChatPostAccess $access
 */
final class ChatPostOrderCorrectionItem extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'companyId' => ['string'],
        'creatorId' => ['int'],
        'kind' => ['string'],
        'type' => ['string'],
        'payload' => ['Cargomart\ApiClient\Entity\Chat\Objects\Payload\ChatPostPayloadOrderCorrection'],
        'message' => ['string'],
        'createDate' => ['string'],
        'userData' => ['Cargomart\ApiClient\Entity\Chat\Objects\ChatPostUserData'],
        'access' => ['Cargomart\ApiClient\Entity\Chat\Objects\ChatPostAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'companyId' => false,
        'creatorId' => false,
        'kind' => false,
        'type' => false,
        'payload' => false,
        'message' => false,
        'createDate' => false,
        'userData' => false,
        'access' => false,
    ];
}
