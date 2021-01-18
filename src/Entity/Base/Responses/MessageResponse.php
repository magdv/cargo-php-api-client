<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ только с сообщениями
 * source: base/responses/message-response.json
 *
 * @property MessageV2[] $message
 */
final class MessageResponse extends AbstractResponse
{
    protected static $types = ['message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2']];
    protected static $nullables = ['message' => false];
}
