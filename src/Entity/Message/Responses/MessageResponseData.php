<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Message\Objects\Message;

/**
 * source: message/responses/message-response.json#/properties/data
 *
 * @property Message $message
 */
final class MessageResponseData extends AbstractEntity
{
    protected static $types = ['message' => ['Cargomart\ApiClient\Entity\Message\Objects\Message']];
    protected static $nullables = ['message' => false];
}
