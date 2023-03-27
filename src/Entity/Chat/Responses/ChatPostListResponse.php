<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/responses/chat-post-list-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ списка сообщений
 * source: chat/responses/chat-post-list-response.json
 *
 * @property MessageV2[] $message
 * @property ChatPostListResponseData $data
 */
final class ChatPostListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Chat\Responses\ChatPostListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
