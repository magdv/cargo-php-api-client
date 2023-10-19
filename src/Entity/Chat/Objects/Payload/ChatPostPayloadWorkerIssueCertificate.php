<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Objects\Payload;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Процесс выдачи сертификата сотруднику
 * source: chat/objects/payload/chat-post-payload-worker-issue-certificate.json
 *
 * @property string $type
 * @property string $id
 * @property string $name
 * @property string $status
 * @property string $phone
 * @property string $comment
 */
final class ChatPostPayloadWorkerIssueCertificate extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'id' => ['string'],
        'name' => ['string'],
        'status' => ['string'],
        'phone' => ['string'],
        'comment' => ['string'],
    ];

    protected static $nullables = [
        'type' => false,
        'id' => false,
        'name' => false,
        'status' => false,
        'phone' => false,
        'comment' => false,
    ];
}
