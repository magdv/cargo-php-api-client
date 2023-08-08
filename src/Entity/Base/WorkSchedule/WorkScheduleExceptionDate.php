<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\WorkSchedule;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Режим работы на определенную дату
 * source: base/work-schedule/work-schedule-exception-date.json
 *
 * @property string $date
 * @property WorkScheduleDay $day
 */
final class WorkScheduleExceptionDate extends AbstractEntity
{
    protected static $types = [
        'date' => ['string'],
        'day' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
    ];

    protected static $nullables = ['date' => false, 'day' => false];
}
