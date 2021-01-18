<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Booking;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Booking\ExternalId\Confirm;

/**
 * url: /api/v2/booking/{externalId}
 */
final class ExternalId extends AbstractBuilder
{
    protected const URL = '/api/v2/booking/{externalId}';

    public function confirm(): Confirm
    {
        return new Confirm($this->params, $this->client);
    }
}
