<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/booking/request/{bookingId}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\Request;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Booking\Request\BookingId\Publish;

/**
 * url: /api/v2/booking/request/{bookingId}
 */
final class BookingId extends AbstractBuilder
{
    protected const URL = '/api/v2/booking/request/{bookingId}';

    public function publish(): Publish
    {
        return new Publish($this->params, $this->client);
    }

    public function get(): BookingIdGet
    {
        return new BookingIdGet($this->client, $this->getUrl());
    }

    public function delete(): BookingIdDelete
    {
        return new BookingIdDelete($this->client, $this->getUrl());
    }
}
