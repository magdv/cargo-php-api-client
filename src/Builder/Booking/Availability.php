<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/booking/availability
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/booking/availability
 */
final class Availability extends AbstractBuilder
{
    protected const URL = '/api/v2/booking/availability';

    public function get(): AvailabilityGet
    {
        return new AvailabilityGet($this->client, $this->getUrl());
    }
}
