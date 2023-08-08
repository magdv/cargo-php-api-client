<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Base\WorkSchedule;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о работе по дням недели
 * source: base/work-schedule/work-schedule.json#/properties/days
 *
 * @property WorkScheduleDay $monday
 * @property WorkScheduleDay $tuesday
 * @property WorkScheduleDay $wednesday
 * @property WorkScheduleDay $thursday
 * @property WorkScheduleDay $friday
 * @property WorkScheduleDay $saturday
 * @property WorkScheduleDay $sunday
 */
final class WorkScheduleDays extends AbstractEntity
{
    protected static $types = [
        'monday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
        'tuesday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
        'wednesday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
        'thursday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
        'friday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
        'saturday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
        'sunday' => ['Cargomart\ApiClient\Entity\Base\WorkSchedule\WorkScheduleDay'],
    ];

    protected static $nullables = [
        'monday' => false,
        'tuesday' => false,
        'wednesday' => false,
        'thursday' => false,
        'friday' => false,
        'saturday' => false,
        'sunday' => false,
    ];
}
