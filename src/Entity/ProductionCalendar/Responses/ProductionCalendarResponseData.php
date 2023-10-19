<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ProductionCalendar\Responses;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные из производственного календаря
 * source: production-calendar/responses/production-calendar-response.json#/properties/data
 *
 * @property string[] $holidays
 */
final class ProductionCalendarResponseData extends AbstractEntity
{
    protected static $types = ['holidays' => ['array', 'string']];
    protected static $nullables = ['holidays' => false];
}
