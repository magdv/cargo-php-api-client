<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/ac/storage-point
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/ac/storage-point
 */
final class StoragePoint extends AbstractBuilder
{
    protected const URL = '/api/v2/ac/storage-point';

    public function get(): StoragePointGet
    {
        return new StoragePointGet($this->client, $this->getUrl());
    }
}
