<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Файл аннулирования был подписан
 * source: chat/objects/payload/chat-post-payload-expeditor-proxy-cancellation-signed.json
 *
 * @property string $signerFio
 * @property string $signDate
 * @property string $fileUrl
 * @property string $signFileUrl
 */
final class ChatPostPayloadExpeditorProxyCancellationSigned extends AbstractEntity
{
    protected static $types = [
        'signerFio' => ['string'],
        'signDate' => ['string'],
        'fileUrl' => ['string'],
        'signFileUrl' => ['string'],
    ];

    protected static $nullables = ['signerFio' => false, 'signDate' => false, 'fileUrl' => false, 'signFileUrl' => false];
}
