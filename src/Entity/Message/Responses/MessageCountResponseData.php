<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: message/responses/message-count-response.json#/properties/data
 *
 * @property int $total
 */
final class MessageCountResponseData extends AbstractEntity
{
    protected static $types = ['total' => ['int']];
    protected static $nullables = ['total' => false];
}
