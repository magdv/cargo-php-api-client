<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект разделенной передачи даты и времени
 * source: base/date-time-separate.json
 *
 * @property string $date
 * @property string $time
 */
final class DateTimeSeparate extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'time' => ['string']];
    protected static $nullables = ['date' => false, 'time' => false];
}
