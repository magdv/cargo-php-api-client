<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/itinerary/by-kladr
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Itinerary;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/itinerary/by-kladr
 */
final class ByKladr extends AbstractBuilder
{
    protected const URL = '/api/v2/itinerary/by-kladr';

    public function get(): ByKladrGet
    {
        return new ByKladrGet($this->client, $this->getUrl());
    }
}
