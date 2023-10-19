<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ProductionCalendar\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Праздничные дни по производственному календарю
 * source: production-calendar/responses/production-calendar-response.json
 *
 * @property MessageV2[] $message
 * @property ProductionCalendarResponseData $data
 */
final class ProductionCalendarResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\ProductionCalendar\Responses\ProductionCalendarResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
