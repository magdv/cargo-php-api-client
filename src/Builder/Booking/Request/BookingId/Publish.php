<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/booking/request/{bookingId}/publish
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking\Request\BookingId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/booking/request/{bookingId}/publish
 */
final class Publish extends AbstractBuilder
{
    protected const URL = '/api/v2/booking/request/{bookingId}/publish';

    public function post(): PublishPost
    {
        return new PublishPost($this->client, $this->getUrl());
    }
}
