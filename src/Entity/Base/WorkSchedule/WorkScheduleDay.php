<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\WorkSchedule;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: base/work-schedule/work-schedule-day.json
 *
 * @property bool $isRestDay
 * @property WorkingHours $hours
 */
final class WorkScheduleDay extends AbstractEntity
{
    protected static $types = [
        'isRestDay' => ['bool'],
        'hours' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkingHours'],
    ];

    protected static $nullables = ['isRestDay' => false, 'hours' => false];
}
