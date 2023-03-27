<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: base/date-time-range.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Диапазон дат (даты с временем)
 * source: base/date-time-range.json
 *
 * @property string $from
 * @property string $to
 */
final class DateTimeRange extends AbstractEntity
{
    protected static $types = ['from' => ['string'], 'to' => ['string']];
    protected static $nullables = ['from' => false, 'to' => false];
}
