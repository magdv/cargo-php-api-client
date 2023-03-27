<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: chat/responses/chat-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Chat\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ c одним чатом
 * source: chat/responses/chat-response.json
 *
 * @property MessageV2[] $message
 * @property ChatResponseData $data
 */
final class ChatResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Chat\Responses\ChatResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
