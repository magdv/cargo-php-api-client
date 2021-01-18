<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Сообщение об ошибке или уведомление
 * source: base/message.json
 *
 * @property int $code
 * @property string $title
 * @property string $details
 * @property MessageData $data
 */
final class Message extends AbstractEntity
{
    protected static $types = [
        'code' => ['int'],
        'title' => ['string'],
        'details' => ['string'],
        'data' => ['Cargomart\ApiClient\Entity\Base\MessageData'],
    ];

    protected static $nullables = ['code' => false, 'title' => false, 'details' => false, 'data' => false];
}
