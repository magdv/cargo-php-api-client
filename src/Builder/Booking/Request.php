<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Booking\Request\BookingId;

/**
 * url: /api/v2/booking/request
 */
final class Request extends AbstractBuilder
{
    protected const URL = '/api/v2/booking/request';

    public function bookingId(string $bookingId): BookingId
    {
        $params = $this->params;
        $params['bookingId'] = $bookingId;
        return new BookingId($params, $this->client);
    }

    public function get(): RequestGet
    {
        return new RequestGet($this->client, $this->getUrl());
    }

    public function post(): RequestPost
    {
        return new RequestPost($this->client, $this->getUrl());
    }
}
