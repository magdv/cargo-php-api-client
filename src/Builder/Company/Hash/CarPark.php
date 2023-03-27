<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/car-park
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/car-park
 */
final class CarPark extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/car-park';

    public function get(): CarParkGet
    {
        return new CarParkGet($this->client, $this->getUrl());
    }

    public function patch(): CarParkPatch
    {
        return new CarParkPatch($this->client, $this->getUrl());
    }
}
