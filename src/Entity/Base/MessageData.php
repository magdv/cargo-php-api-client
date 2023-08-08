<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Дополнительные данные к сообщению
 * source: base/message.json#/properties/data
 *
 * @property string[] $relatedProperty
 */
final class MessageData extends AbstractEntity
{
    protected static $types = ['relatedProperty' => ['array', 'string']];
    protected static $nullables = ['relatedProperty' => false];
}
