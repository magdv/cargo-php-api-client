<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/objects/payload/chat-post-payload-issue-certificate.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Процесс выдачи сертификата сотруднику
 * source: chat/objects/payload/chat-post-payload-issue-certificate.json
 *
 * @property string $certId
 */
final class ChatPostPayloadIssueCertificate extends AbstractEntity
{
    protected static $types = ['certId' => ['string']];
    protected static $nullables = ['certId' => false];
}
