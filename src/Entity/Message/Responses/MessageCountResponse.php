<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с количеством сообщений по фильтру
 * source: message/responses/message-count-response.json
 *
 * @property MessageCountResponseData $data
 */
final class MessageCountResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Message\Responses\MessageCountResponseData']];
    protected static $nullables = ['data' => false];
}
