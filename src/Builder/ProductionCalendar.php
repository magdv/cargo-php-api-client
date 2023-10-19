<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/production-calendar
 */
final class ProductionCalendar extends AbstractBuilder
{
    protected const URL = '/api/v2/production-calendar';

    public function get(): ProductionCalendarGet
    {
        return new ProductionCalendarGet($this->client, $this->getUrl());
    }
}
