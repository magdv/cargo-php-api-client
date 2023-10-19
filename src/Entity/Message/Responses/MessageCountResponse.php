<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с количеством сообщений по фильтру
 * source: message/responses/message-count-response.json
 *
 * @property MessageV2[] $message
 * @property MessageCountResponseData $data
 */
final class MessageCountResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Message\Responses\MessageCountResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
