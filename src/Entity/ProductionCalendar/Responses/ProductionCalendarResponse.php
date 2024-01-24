<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ProductionCalendar\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Праздничные дни по производственному календарю
 * source: production-calendar/responses/production-calendar-response.json
 *
 * @property ProductionCalendarResponseData $data
 */
final class ProductionCalendarResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\ProductionCalendar\Responses\ProductionCalendarResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
