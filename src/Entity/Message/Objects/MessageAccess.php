<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Message\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступ к сообщениям
 * source: message/objects/message-access.json
 *
 * @property bool $view
 * @property bool $delete
 */
final class MessageAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'delete' => ['bool']];
    protected static $nullables = ['view' => false, 'delete' => false];
}
