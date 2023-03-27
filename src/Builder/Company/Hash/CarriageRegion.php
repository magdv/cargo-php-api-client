<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/{hash}/carriage-region
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/{hash}/carriage-region
 */
final class CarriageRegion extends AbstractBuilder
{
    protected const URL = '/api/v2/company/{hash}/carriage-region';

    public function get(): CarriageRegionGet
    {
        return new CarriageRegionGet($this->client, $this->getUrl());
    }

    public function patch(): CarriageRegionPatch
    {
        return new CarriageRegionPatch($this->client, $this->getUrl());
    }
}
