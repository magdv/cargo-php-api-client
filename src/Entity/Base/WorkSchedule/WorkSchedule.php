<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\WorkSchedule;

use Cargomart\ApiClient\AbstractEntity;

/**
 * График работы
 * source: base/work-schedule/work-schedule.json
 *
 * @property WorkingHours $hours
 * @property WorkScheduleDays $days
 * @property WorkScheduleExceptionDate[] $exceptionDates
 */
final class WorkSchedule extends AbstractEntity
{
    protected static $types = [
        'hours' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkingHours'],
        'days' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDays'],
        'exceptionDates' => ['array', 'Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleExceptionDate'],
    ];

    protected static $nullables = ['hours' => false, 'days' => false, 'exceptionDates' => false];
}
