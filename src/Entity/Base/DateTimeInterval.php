<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Интервал времени
 * source: base/datetime-interval.json
 *
 * @property int $days
 * @property int $hours
 * @property int $minutes
 * @property int $seconds
 */
final class DateTimeInterval extends AbstractEntity
{
    protected static $types = ['days' => ['int'], 'hours' => ['int'], 'minutes' => ['int'], 'seconds' => ['int']];
    protected static $nullables = ['days' => false, 'hours' => false, 'minutes' => false, 'seconds' => false];
}
