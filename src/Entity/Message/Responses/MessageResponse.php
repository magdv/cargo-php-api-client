<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ c сообщением
 * source: message/responses/message-response.json
 *
 * @property MessageV2[] $message
 * @property MessageResponseData $data
 */
final class MessageResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Message\Responses\MessageResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
