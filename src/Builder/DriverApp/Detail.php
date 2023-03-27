<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/driver-app/detail
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\DriverApp;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/driver-app/detail
 */
final class Detail extends AbstractBuilder
{
    protected const URL = '/api/v2/driver-app/detail';

    public function get(): DetailGet
    {
        return new DetailGet($this->client, $this->getUrl());
    }
}
