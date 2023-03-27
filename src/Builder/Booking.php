<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/booking
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Booking\Availability;
use Cargomart\ApiClient\Builder\Booking\ExternalId;
use Cargomart\ApiClient\Builder\Booking\Request;

/**
 * url: /api/v2/booking
 */
final class Booking extends AbstractBuilder
{
    protected const URL = '/api/v2/booking';

    public function availability(): Availability
    {
        return new Availability($this->params, $this->client);
    }

    public function request(): Request
    {
        return new Request($this->params, $this->client);
    }

    public function externalId(string $externalId): ExternalId
    {
        $params = $this->params;
        $params['externalId'] = $externalId;
        return new ExternalId($params, $this->client);
    }
}
