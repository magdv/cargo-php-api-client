<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/tracking/count
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tracking;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/tracking/count
 */
final class Count extends AbstractBuilder
{
    protected const URL = '/api/v2/tracking/count';

    public function get(): CountGet
    {
        return new CountGet($this->client, $this->getUrl());
    }
}
