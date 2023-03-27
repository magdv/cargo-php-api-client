<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/message-v2.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сообщение об ошибке или уведомление
 * source: base/message-v2.json
 *
 * @property string $type
 * @property int $code
 * @property string $title
 * @property string $validator
 * @property string $path
 * @property \stdClass $property
 * @property string[] $stack
 */
final class MessageV2 extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'code' => ['int'],
        'title' => ['string'],
        'validator' => ['string'],
        'path' => ['string'],
        'property' => ['\stdClass'],
        'stack' => ['array', 'string'],
    ];

    protected static $nullables = [
        'type' => false,
        'code' => false,
        'title' => false,
        'validator' => false,
        'path' => false,
        'property' => true,
        'stack' => false,
    ];
}
