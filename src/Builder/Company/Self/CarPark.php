<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/car-park
 */
final class CarPark extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/car-park';

    public function get(): CarParkGet
    {
        return new CarParkGet($this->client, $this->getUrl());
    }

    public function patch(): CarParkPatch
    {
        return new CarParkPatch($this->client, $this->getUrl());
    }
}
