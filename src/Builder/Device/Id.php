<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/device/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Device;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/device/{id}
 */
final class Id extends AbstractBuilder
{
    protected const URL = '/api/v2/device/{id}';

    public function delete(): IdDelete
    {
        return new IdDelete($this->client, $this->getUrl());
    }
}
