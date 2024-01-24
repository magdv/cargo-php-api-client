<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ c сообщением
 * source: message/responses/message-response.json
 *
 * @property MessageResponseData $data
 */
final class MessageResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Message\Responses\MessageResponseData']];
    protected static $nullables = ['data' => false];
}
