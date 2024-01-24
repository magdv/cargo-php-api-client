<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Базовый объект ответа от сервера с сообщениями
 * source: base/responses/base-message-response.json
 *
 * @property MessageV2[] $message
 */
final class BaseMessageResponse extends AbstractEntity
{
    protected static $types = ['message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2']];
    protected static $nullables = ['message' => false];
}
