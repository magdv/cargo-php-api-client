<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доверенность была подписана
 * source: chat/objects/payload/chat-post-payload-expeditor-proxy-signed.json
 *
 * @property string $type
 * @property string $signerFio
 * @property string $signDate
 * @property string $fileUrl
 * @property string $signFileUrl
 */
final class ChatPostPayloadExpeditorProxySigned extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'signerFio' => ['string'],
        'signDate' => ['string'],
        'fileUrl' => ['string'],
        'signFileUrl' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'signerFio' => false,
        'signDate' => false,
        'fileUrl' => false,
        'signFileUrl' => false,
    ];
}
