<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ со списком чатов
 * source: chat/responses/chat-list-response.json
 *
 * @property MessageV2[] $message
 * @property ChatListResponseData $data
 */
final class ChatListResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Chat\Responses\ChatListResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
