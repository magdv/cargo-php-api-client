<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/company/self/carriage-direction
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/company/self/carriage-direction
 */
final class CarriageDirection extends AbstractBuilder
{
    protected const URL = '/api/v2/company/self/carriage-direction';

    public function get(): CarriageDirectionGet
    {
        return new CarriageDirectionGet($this->client, $this->getUrl());
    }

    public function patch(): CarriageDirectionPatch
    {
        return new CarriageDirectionPatch($this->client, $this->getUrl());
    }
}
