<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ со списком сообщений
 * source: message/responses/message-list-response.json
 *
 * @property MessageListResponseData $data
 */
final class MessageListResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Message\Responses\MessageListResponseData']];
    protected static $nullables = ['data' => false];
}
