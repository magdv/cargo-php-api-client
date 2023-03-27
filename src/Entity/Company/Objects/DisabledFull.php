<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/disabled-full.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о блокировке перевозчика
 * source: company/objects/disabled-full.json
 *
 * @property string $type
 * @property string $deadline
 * @property string $reason
 * @property int $creatorId
 */
final class DisabledFull extends AbstractEntity
{
    protected static $types = [
        'type' => ['string'],
        'deadline' => ['string'],
        'reason' => ['string'],
        'creatorId' => ['int'],
    ];

    protected static $nullables = ['type' => false, 'deadline' => false, 'reason' => false, 'creatorId' => false];
}
