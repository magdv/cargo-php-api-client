<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со списком чатов
 * source: chat/responses/chat-list-response.json
 *
 * @property ChatListResponseData $data
 */
final class ChatListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Chat\Responses\ChatListResponseData']];
    protected static $nullables = ['data' => false];
}
