<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/itinerary
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Itinerary\ByKladr;

/**
 * url: /api/v2/itinerary
 */
final class Itinerary extends AbstractBuilder
{
    protected const URL = '/api/v2/itinerary';

    public function byKladr(): ByKladr
    {
        return new ByKladr($this->params, $this->client);
    }
}
