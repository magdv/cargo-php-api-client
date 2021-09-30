<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком сообщений
 * source: message/responses/message-list-response.json
 *
 * @property MessageV2[] $message
 * @property MessageListResponseData $data
 */
final class MessageListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Message\Responses\MessageListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
