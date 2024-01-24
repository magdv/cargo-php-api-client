<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ c одним чатом
 * source: chat/responses/chat-response.json
 *
 * @property ChatResponseData $data
 */
final class ChatResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Chat\Responses\ChatResponseData']];
    protected static $nullables = ['data' => false];
}
