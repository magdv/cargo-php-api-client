<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ списка сообщений
 * source: chat/responses/chat-post-list-response.json
 *
 * @property ChatPostListResponseData $data
 */
final class ChatPostListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Chat\Responses\ChatPostListResponseData']];
    protected static $nullables = ['data' => false];
}
